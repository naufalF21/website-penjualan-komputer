@extends('layouts.main')
@section('container')
    <main>
        <div class="container-fluid pr-4">
            <h3 class="mt-4">{{ $title }}</h3>
            <hr>
            {{-- table --}}
            <div class="card mb-4">
                <div class="card-body">
                    <form action="{{ route('penjualan.update', $transaction->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="date">Tanggal Penjualan</label>
                            <input type="date" class="form-control" id="date" name="tanggal_penjualan"
                                value="{{ $transaction->tanggal_penjualan }}">
                        </div>
                        <div class="form-group">
                            <label>Nama Konsumen</label>
                            <input type="text" class="form-control" value="{{ $transaction->nama_konsumen }}"
                                name="nama_konsumen">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" value="{{ $transaction->alamat }}" name="alamat">
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
                    <form action="{{ route('penjualan.delete', $transaction->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
