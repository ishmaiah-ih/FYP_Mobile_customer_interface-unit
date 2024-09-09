<?php

namespace App\Http\Controllers;

//use http\Client\Curl\User;
use App\Models\Contancts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TopupHistory;


class DashboardController extends Controller
{
//    user dashboard
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $name = $user->name;

// Fetch user's usage data
        $user_data = TopupHistory::where('user_id', $user_id)
            ->selectRaw('SUM(amount) AS total_usage, MIN(date_generated) AS first_transaction_date, MAX(date_generated) AS last_transaction_date')
            ->first();

        $total_usage = $user_data->total_usage ?? 0;
        $first_transaction_date = $user_data->first_transaction_date ?? 'N/A';
        $last_transaction_date = $user_data->last_transaction_date ?? 'N/A';

// Fetch total kWh generated
        $total_kwh = TopupHistory::where('user_id', $user_id)
            ->sum('kwh_generated') ?? 0;

// Fetch the two most recent transactions
        $recent_transactions = TopupHistory::where('user_id', $user_id)
            ->orderBy('date_generated', 'desc')
            ->take(2)
            ->get(['amount', 'date_generated']);

// Sample remaining balance
        $remaining_balance_kwh = 120;

        return view('dashboard', compact(
            'name',
            'total_usage',
            'first_transaction_date',
            'last_transaction_date',
            'total_kwh',
            'recent_transactions',
            'remaining_balance_kwh'
        ));
    }

//admin dashboard
    public function admin_index()
    {

        if (Auth::id()) {
            if (Auth::user()->role == 'admin') {
                $users = User::where('role', 'user')->get();
                $admins = User::where('role', 'admin')->get();
                $history = TopupHistory::all();
                $totalHistories = $history->count();
                $contacts = Contancts::all();
                $totalContacts = $contacts->count();

                $all = User::all();
                $totalUsers = $users->count();
                $totalAdmins = $admins->count();
                $total = $all->count();


                return view('admin.index', compact('users', 'totalContacts', 'admins', 'totalHistories', 'total', 'all', 'totalUsers', 'totalAdmins'));
            } else {
                return redirect()->back()->with('error', 'You are not authorized to access this page');
            }
        } else {
            return redirect('login')->with('error', 'You are supposed to login in first');
        }
    }


    public function billing()
    {

        $invoices = TopupHistory::with('user')
            ->orderBy('date_generated', 'desc')
            ->limit(5)
            ->get(); // Fetch recent invoices
        $transactions = TopupHistory::with('user')
            ->orderBy('date_generated', 'desc')
            ->get(); // Fetch recent transactions

        return view('admin.billing', compact('invoices', 'transactions'));
    }

    public function delete_user($id)
    {
        $data = User::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'User has been deleted');
    }

    public function delete_token($id)
    {
        $data = TopupHistory::find($id);
        $data->delete();

        return redirect()->back()->with('success', 'Token has been deleted');
    }
}
