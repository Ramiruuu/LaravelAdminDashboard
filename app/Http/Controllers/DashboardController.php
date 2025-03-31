<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $transactions = Transaction::with('user')->get();
        return view('dashboard', compact('users', 'transactions'));
    }
}