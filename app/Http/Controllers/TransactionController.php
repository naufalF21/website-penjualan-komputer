<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();

        return view('penjualan.index', [
            'title' => 'Penjualan',
            'transactions' => $transactions,
        ]);
    }

    public function edit($id)
    {
        $transaction = Transaction::find($id);

        return view('penjualan.edit', [
            'title' => 'Edit Penjualan',
            'transaction' => $transaction
        ]);
    }

    public function create()
    {
        return view('penjualan.create', [
            'title' => 'Tambah Penjualan',
        ]);
    }

    public function store(Request $request)
    {
        // Validasi input sesuai kebutuhan
        $validatedData = $request->validate([
            'tanggal_penjualan' => 'required',
            'nama_konsumen' => 'required',
            'alamat' => 'required',
        ]);

        // Simpan data penjualan baru
        $penjualan = new Transaction;
        $penjualan->tanggal_penjualan = $validatedData['tanggal_penjualan'];
        $penjualan->nama_konsumen = $validatedData['nama_konsumen'];
        $penjualan->alamat = $validatedData['alamat'];

        $penjualan->save();

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $penjualan = Transaction::find($id);

        // Validasi input sesuai kebutuhan
        $validatedData = $request->validate([
            'tanggal_penjualan' => 'required',
            'nama_konsumen' => 'required',
            'alamat' => 'required',
        ]);

        // Update data penjualan
        $penjualan->tanggal_penjualan = $validatedData['tanggal_penjualan'];
        $penjualan->nama_konsumen = $validatedData['nama_konsumen'];
        $penjualan->alamat = $validatedData['alamat'];

        $penjualan->save();

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil diperbarui.');
    }

    public function delete($id)
    {
        $penjualan = Transaction::find($id);

        $penjualan->delete();

        return redirect()->route('penjualan.index')->with('success', 'Data penjualan berhasil dihapus.');
    }
}
