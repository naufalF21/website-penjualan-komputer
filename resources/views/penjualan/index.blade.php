@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">{{ $title }}</h3>
            <div class="d-flex justify-content-between mb-4">
                <p>List {{ $title }} Terakhir</p>
                <a href="/penjualan/create" style="text-decoration: none !important;">
                    <span class="mr-2 font-weight-bold">Penjualan</span>
                    <span class="fa fa-plus text-success" aria-hidden="true"></span>
                </a>
            </div>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Konsumen</th>
                                    <th>Tanggal</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $key => $transaction)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $transaction->nama_konsumen }}</td>
                                        <td>{{ $transaction->tanggal_penjualan }}</td>
                                        <td>{{ $transaction->alamat }}</td>
                                        <td class="d-flex">
                                            <a href="/penjualan/{{ $transaction->id }}/edit"
                                                class="btn btn-success mr-3 custom-btn-table">edit</a>
                                            <a href="/detail-penjualan/{{ $transaction->id }}" type="submit"
                                                class="btn btn-secondary custom-btn-table">detail</a>
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
