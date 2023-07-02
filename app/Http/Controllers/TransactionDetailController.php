<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class TransactionDetailController extends Controller
{
    public function index($id)
    {
        $transactionDetail = TransactionDetail::find($id);
        return view('penjualan.detail', [
            'title' => 'Detail Penjualan',
            'transactionDetail' => $transactionDetail
        ]);
    }
}
