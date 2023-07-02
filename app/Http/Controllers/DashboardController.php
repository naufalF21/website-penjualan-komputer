<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'transactions' => Transaction::orderBy('id', 'desc')->take(10)->get(),
            'bulan' => Carbon::now()->locale('id')->monthName
        ]);
    }
}
