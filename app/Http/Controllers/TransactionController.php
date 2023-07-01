<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transactions')->get();

        return view('penjualan.index', [
            'title' => 'Penjualan',
            'transactions' => $transactions,
        ]);
    }
}
