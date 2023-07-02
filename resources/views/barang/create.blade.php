@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">{{ $title }}</h3>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <select class="custom-select" name="transaction_id">
                                @foreach ($transactions as $transaction)
                                    <option value="{{ $transaction->id }}" name="transaction_id">
                                        {{ $transaction->nama_konsumen }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input type="text" class="form-control" name="harga_jual">
                        </div>
                        <div class="form-group">
                            <label>Harga Beli</label>
                            <input type="text" class="form-control" name="harga_beli">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" name="kategori">
                        </div>
                        <div class="d-flex justify-content-between">

                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
            {{-- end table --}}
        </div>
    </main>
@endsection
