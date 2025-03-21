<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        // Fetch all transactions from the database
        $transactions = Transaction::all();

        // Pass the transactions to the view
        return view('transactions.index', compact('transactions'));
    }
}