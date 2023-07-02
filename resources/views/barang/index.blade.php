@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid">
            <h3 class="mt-4">Barang</h3>
            <div class="d-flex justify-content-between mb-4">
                <p>List master {{ $title }} komputer</p>
                <a href="/barang/create" style="text-decoration: none !important;">
                    <span class="mr-2 font-weight-bold">Barang</span>
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
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Stok</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->kode_barang }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->harga_jual }}</td>
                                        <td>{{ $item->harga_beli }}</td>
                                        <td>{{ $item->stok }}</td>
                                        <td>{{ $item->kategori }}</td>
                                        <td>
                                            <a href="/barang/{{ $item->id }}/edit"
                                                class="btn btn-success mr-3 custom-btn-table">edit</a>
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
