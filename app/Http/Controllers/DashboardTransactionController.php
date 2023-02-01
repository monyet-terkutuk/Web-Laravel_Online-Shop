<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransactionController extends Controller
{
    public function transaction()
    {
        return view('pages/dashboard-transactions');
    }

    public function transactionDetails()
    {
        return view('pages/dashboard-transactions-detail');
    }
}
