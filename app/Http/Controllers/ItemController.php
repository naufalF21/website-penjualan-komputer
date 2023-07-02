<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
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

    public function create()
    {
        return view('barang.create', [
            'title' => 'Tambah Barang',
            'transactions' => Transaction::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input sesuai kebutuhan
        $validatedData = $request->validate([
            'transaction_id' => 'required',
            'kode_barang' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
            'kategori' => 'required',
        ]);

        // Simpan data penjualan baru
        $item = new Item;
        $item->transaction_id = $validatedData['transaction_id'];
        $item->kode_barang = $validatedData['kode_barang'];
        $item->nama = $validatedData['nama'];
        $item->harga_jual = $validatedData['harga_jual'];
        $item->harga_beli = $validatedData['harga_beli'];
        $item->stok = $validatedData['stok'];
        $item->kategori = $validatedData['kategori'];

        $item->save();

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil ditambahkan.');
    }

    public function edit($id)
    {
        return view('barang.edit', [
            'title' => 'Edit Barang',
            'item' => Item::find($id),
            'transactions' => Transaction::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = Item::find($id);

        // Validasi input sesuai kebutuhan
        $validatedData = $request->validate([
            'transaction_id' => 'required',
            'kode_barang' => 'required',
            'nama' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required',
            'kategori' => 'required',
        ]);

        // Update data item
        $item->transaction_id = $validatedData['transaction_id'];
        $item->kode_barang = $validatedData['kode_barang'];
        $item->nama = $validatedData['nama'];
        $item->harga_jual = $validatedData['harga_jual'];
        $item->harga_beli = $validatedData['harga_beli'];
        $item->stok = $validatedData['stok'];
        $item->kategori = $validatedData['kategori'];

        $item->save();

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil diperbarui.');
    }

    public function delete($id)
    {
        $barang = Item::find($id);

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil dihapus.');
    }
}
