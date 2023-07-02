<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\DB;

class TransactionDetailController extends Controller
{
    public function index(Transaction $transaction)
    {
        return view('penjualan.detail', [
            'title' => 'Post Categories',
            'transaction' => $transaction,
            'transactionDetail' => TransactionDetail::find($transaction)->first()
        ]);
    }
}
