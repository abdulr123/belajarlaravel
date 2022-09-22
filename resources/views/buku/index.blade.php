@extends('layouts.main')

@section('container')
<h1>Halaman Detail Buku</h1>
<a href="buku/create"class="btn btn-primary">Tambah Data</a>
<table class="table caption-top">
    <thead>
    <tr>
        <th>No</th>
        <th>Judul Buku</th>
        <th>Penulis Buku</th>
        <th>Penerbit Buku</th>
        <th>Tahun Terbit</th>
        <th>Aksi</th>
    </tr>
    </thead>
    
    @foreach ($buku as $b)   
    <tr>
        <td>{{ $b->id }}</td>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->penerbit }}</td>
        <td>{{ $b->tahun_terbit }}</td>
        <td>           
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">       
                <a href="/buku/{{ $b->id }}/edit"class="btn btn-warning me-2 mb-1">Edit</a> 
                <form action="/buku/{{ $b->id }}" method="POST">
                   @csrf
                   <input type="submit" class="btn btn-danger" value="Hapus">
                </form>
             </div>
        </td>
    </tr>
    
    @endforeach
</table>
@endsection