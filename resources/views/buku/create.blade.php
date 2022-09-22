@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Tambah Data Buku</b></div>

                <div class="card-body">
                    <form action="/buku/save" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" placeholder="Belajar Laravel 9">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Penulis</label>
                            <input type="text" class="form-control" name="penulis" placeholder="Abdul Rahman, M.Kom">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" name="penerbit" placeholder="Informatika Fakultas Teknik dan Komputer Universitas Baturaja">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" name="tahun_terbit" placeholder="2022">
                        </div>
                        <a href="/buku" class="btn btn-warning me-2">Kembali</a>
                        <button type="submit" class="btn btn-info">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection