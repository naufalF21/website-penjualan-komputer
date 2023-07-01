@extends('layouts.main')
@section('container')
    {{-- navbar --}}
    {{-- code here --}}
    {{-- end navbar --}}
    <div class="p-4 d-flex justify-content-between" style="background-color: #F5F7F8">
        <div class="card p-4 table-responsive" style="border-radius: 15px">
            <h3>Penjualan</h3>
            <div class="d-flex justify-content-between mb-4">
                <p>List Penjualan Terakhir</p>
                <div class="custom-btn-add">
                    <span class="mr-2 font-weight-bold">Penjualan</span>
                    <span class="fa fa-plus text-success" aria-hidden="true"></span>
                </div>
            </div>

            {{-- table --}}
            <table id="myTable" class="table" style="width:100%">
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

            {{-- end table --}}
        </div>
        <div class="card ml-4" style="border-radius: 15px">
            <h3>Orders overview</h3>
        </div>
    </div>
@endsection
