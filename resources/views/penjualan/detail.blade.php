@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">Detail Penjualan {{ $transaction->nama_konsumen }}</h3>
            <div class="d-flex justify-content-between mb-4">
                <p>ID Penjualan {{ $transaction->id }}</p>

            </div>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Barang</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaction->items as $item)
                                    <tr>
                                        <td>{{ $item->kode_barang }}</td>
                                        <td>{{ $transactionDetail->jumlah }}</td>
                                        <td>{{ $transactionDetail->harga_satuan }}</td>
                                        <td>{{ $transactionDetail->harga_total }}</td>
                                    </tr>
                                @endforeach
                                {{-- @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->nama_konsumen }}</td>
                                        <td>{{ $transaction->tanggal_penjualan }}</td>
                                        <td>{{ $transaction->alamat }}</td>
                                        <td class="d-flex">
                                            <a href="/penjualan/{{ $transaction->id }}/edit"
                                                class="btn btn-success mr-3 custom-btn-table">edit</a>
                                            <a href="/penjualan/{{ $transaction->id }}/detail" type="submit"
                                                class="btn btn-secondary custom-btn-table">detail</a>
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- end table --}}
        </div>
    </main>
@endsection
