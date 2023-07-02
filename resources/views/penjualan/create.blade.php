@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">{{ $title }}</h3>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('penjualan.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="date">Tanggal Penjualan</label>
                            <input type="date" class="form-control" id="date" name="tanggal_penjualan">
                        </div>
                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <input type="text" class="form-control" name="nama_konsumen">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control"" name="alamat">
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
