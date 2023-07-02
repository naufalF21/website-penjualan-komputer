@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">{{ $title }}</h3>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('barang.update', $item->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <select class="custom-select" name="transaction_id">
                                <option selected>{{ $item->transaction->nama_konsumen }}</option>
                                @foreach ($transactions as $transaction)
                                    <option value="{{ $transaction->id }}" name="transaction_id">
                                        {{ $transaction->nama_konsumen }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" value="{{ $item->kode_barang }}" name="kode_barang">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="{{ $item->nama }}" name="nama">
                        </div>
                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input type="text" class="form-control" value="{{ $item->harga_jual }}" name="harga_jual">
                        </div>
                        <div class="form-group">
                            <label>Harga Beli</label>
                            <input type="text" class="form-control" value="{{ $item->harga_beli }}" name="harga_beli">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" value="{{ $item->stok }}" name="stok">
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" value="{{ $item->kategori }}" name="kategori">
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                                Hapus
                            </button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>

                    </form>
                </div>
            </div>
            {{-- end table --}}
        </div>
    </main>
    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data penjualan ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <form action="{{ route('barang.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
