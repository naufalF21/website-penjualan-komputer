<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $items = DB::table('items')->get();

        return view('barang.index', [
            'title' => 'Barang',
            'items' => $items,
        ]);
    }
}
