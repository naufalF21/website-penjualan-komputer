@extends('layouts.main')
@section('container')
    {{-- navbar --}}
    {{-- code here --}}
    {{-- end navbar --}}
    {{-- <div class="p-4 d-flex justify-content-between" style="background-color: #F5F7F8">
        <div class="card p-4 table-responsive" style="border-radius: 15px">
            <h3>Penjualan</h3>
            <div class="d-flex justify-content-between mb-4">
                <p>List Penjualan Terakhir</p>
                <div class="custom-btn-add">
                    <span class="mr-2 font-weight-bold">Penjualan</span>
                    <span class="fa fa-plus text-success" aria-hidden="true"></span>
                </div>
            </div> --}}

    {{-- table --}}
    {{-- <table id="myTable" class="table" style="width:100%">
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

            </table> --}}

    {{-- end table --}}
    {{-- </div>
        <div class="card ml-4" style="border-radius: 15px">
            <h3>Orders overview</h3>
        </div>
    </div> --}}
    <div id="layoutSidenav">

        {{-- sidebar --}}
        @include('partials.sidebar')
        {{-- end sidebar --}}

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h3 class="mt-4">Barang</h3>
                    <p>List master barang komputer</p>
                    <hr>
                    {{-- table --}}
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Barang</th>
                                            <th>Kode Barang</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- end table --}}
                </div>
            </main>
            {{-- footer --}}
            @include('partials.footer')
            {{-- footer --}}
        </div>
    </div>
@endsection
