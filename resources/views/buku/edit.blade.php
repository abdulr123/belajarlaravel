@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><b>Edit Data Buku</b></div>

                <div class="card-body">
                    <form action="/buku/{{ $buku->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Penulis</label>
                            <input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penerbit Buku</label>
                            <input type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" name="tahun_terbit" value="{{ $buku->tahun_terbit }}">
                        </div>
                
                        <a href="/buku" class="btn btn-warning me-2">Kembali</a>
                        <button type="submit" class="btn btn-info">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection