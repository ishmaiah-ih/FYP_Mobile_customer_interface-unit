<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Ratchet\Client\WebSocket;
use Ratchet\Client\Connector;
use React\EventLoop\Factory as LoopFactory;
use OpenSSL;
use App\Models\TopupHistory;

class TokenLogic extends Controller
{
    private $encryptionKey = 'abcdefghijklmnopqrstuvwxyz123456'; // 256-bit key

    /**
     * Handle top-up form submission.
     */
    public function topUp(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'amount' => 'required|numeric|min:1',
        ]);

        $user = Auth::user();
        $meterNumber = $user->account;
        $amount = $request->input('amount');
        $kWhGenerated = $this->calculateKWh($amount); // Calculate kWh from the amount

        // Create the data to be encrypted
        $tokenData = [
            'meterNumber' => $meterNumber,
            'kWhGenerated' => $kWhGenerated,
        ];

        // Encrypt the data
        $encryptedToken = $this->encryptToken(json_encode($tokenData));

        // Save top-up details to the history table
        TopupHistory::create([
            'user_id' => $user->id,
            'meter_number' => $meterNumber,
            'amount' => $amount,
            'kwh_generated' => $kWhGenerated,
            'token' => $encryptedToken, // Store the encrypted token
            'date_generated' => now(), // Use current timestamp
            'email' => $user->email,
            'phone' => $user->phone,
        ]);

        // Send the token via WebSocket to the ESP32
        $this->sendTokenToESP32($encryptedToken);

        // Return JSON response with success message and token
        return response()->json([
            'success' => true,
            'message' => 'Top-up successful!',
            'kWhGenerated' => $kWhGenerated,
            'token' => $encryptedToken, // Include the token if needed
        ]);
    }

    /**
     * Calculate kWh generated from the top-up amount.
     *
     * @param float $amount
     * @return float
     */
    private function calculateKWh($amount)
    {
        // kWh generated = amount / 86
        return $amount / 86;
    }

    /**
     * Encrypt the token using AES-256 encryption.
     *
     * @param string $tokenData
     * @return string
     */
    private function encryptToken($tokenData)
    {
        // Create an initialization vector
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));

        // Encrypt the token data
        $encryptedData = openssl_encrypt($tokenData, 'aes-256-cbc', $this->encryptionKey, OPENSSL_RAW_DATA, $iv);

        // Combine IV and encrypted data for transmission
        return base64_encode($iv . $encryptedData);
    }

    /**
     * Send the encrypted token to the ESP32 via WebSocket.
     *
     * @param string $encryptedToken
     * @return void
     */
    private function sendTokenToESP32($encryptedToken)
    {
        // ESP32 WebSocket URL
//        $wsUrl = 'ws://192.168.1.171:81';
//        $wsUrl = 'ws://64.225.27.52:81';
        $wsUrl = 'ws://app.finalyearproject.com:81'; // Replace IP with the domain name

        $loop = LoopFactory::create();
        $connector = new Connector($loop);

        // Connect to WebSocket and send the encrypted token
        $connector($wsUrl)->then(function (WebSocket $conn) use ($encryptedToken) {
            // Send the encrypted token to ESP32
            $conn->send($encryptedToken);
            $conn->close();
        }, function ($e) {
            Log::error("WebSocket error: " . $e->getMessage());
        });

        // Run the event loop
        $loop->run();
    }
}
