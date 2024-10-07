<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TopupHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
// Top-Up function
    public function topUp(Request $request)
    {
// Ensure user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to be logged in.');
        }

        $user = Auth::user();

// Fetch user details
        $meterNumber = $user->account;

// Validate the request inputs
        $request->validate([
            'amount' => 'required|numeric|min:51', // Validate amount to be numeric and greater than 50
        ]);

// Generate a random 20-character numeric token
        function generateRandomToken($length = 20): string
        {
            return substr(str_shuffle(str_repeat('0123456789', $length)), 0, $length);
        }

// Encrypt the token with AES-256-CBC
        function encryptToken($data, $key): string
        {
            $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
            $encryptedData = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
            return base64_encode($iv . $encryptedData);
        }

// Process the top-up
        $amount = intval($request->input('amount'));
        $key = config('app.token_key'); // Ensure you have a secure key in your config (or .env)

        $kwhGenerated = ($amount) / 86; // Calculate KWh
        $tokenData = json_encode([
            'token' => generateRandomToken(),
            'amount' => $amount,
            'kwhGenerated' => $kwhGenerated,
            'meterNumber' => $meterNumber
        ]);

        $encryptedToken = encryptToken($tokenData, $key);
        $dateGenerated = now();

// Insert top-up details into the history table
        TopupHistory::create([
            'user_id' => $user->id,
            'meter_number' => $meterNumber,
            'amount' => $amount,
            'kwh_generated' => $kwhGenerated,
            'token' => $encryptedToken,
            'date_generated' => $dateGenerated,
            'email' => $user->email,
            'phone' => $user->phone,
        ]);

// Return token to front-end so it can send via WebSocket
        return response()->json([
            'meterNumber' => $meterNumber,
            'amount' => $amount,
            'kwhGenerated' => $kwhGenerated,
            'token' => $encryptedToken
        ]);
    }

    public function topUp_get()
    {
        return view('users.topup');
    }

    public function token_display(Request $request)
    {
// Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You need to be logged in.');
        }

// Fetch user details
        $userDetails = Auth::user();

// Get data from request, ensuring it's sanitized
        $meterNumber = htmlspecialchars($request->input('meterNumber'));
        $amount = htmlspecialchars($request->input('amount'));
        $kwhGenerated = htmlspecialchars($request->input('kwhGenerated'));
        $token = htmlspecialchars($request->input('token'));
        $dateGenerated = now()->format('Y-m-d H:i:s'); // Get the current date and time

// Pass data to the view
        return view('users.display_token', compact('meterNumber', 'amount', 'kwhGenerated', 'token', 'dateGenerated', 'userDetails'));
    }

    public function history()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Fetch the top-up history for the logged-in user, ordered by the most recent transaction
        $topUpHistory = TopupHistory::where('user_id', $user->id)
            ->orderBy('date_generated', 'desc') // Order by recent transaction
            ->get();

        // Pass the history data to the view
        return view('users.history', compact('topUpHistory'));
    }

}
