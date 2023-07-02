@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">{{ $title }}</h3>
            <div class="d-flex justify-content-between mb-4">
                <p>List {{ $title }} Terakhir</p>
                <div class="custom-btn-add">
                    <span class="mr-2 font-weight-bold">Penjualan</span>
                    <span class="fa fa-plus text-success" aria-hidden="true"></span>
                </div>
            </div>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama Konsumen</th>
                                    <th>Tanggal</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->nama_konsumen }}</td>
                                        <td>{{ $transaction->tanggal_penjualan }}</td>
                                        <td>{{ $transaction->alamat }}</td>
                                        <td class="d-flex">
                                            <button class="btn btn-success mr-3 custom-btn-table">edit</button>
                                            <button class="btn btn-secondary custom-btn-table">detail</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- end table --}}
        </div>
    </main>
@endsection
