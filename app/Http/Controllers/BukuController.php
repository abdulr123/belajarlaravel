<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{

    public function index()
    {
        $data = [
            'title' => "Details Buku",
            'buku' => Buku::all()
        ];
        return view('buku.index')->with($data);
    }

    public function create()
    {
        $data = [
            'title' => "Insert Data Buku"
        ];
        return view('buku.create')->with($data);
    }

    public function save(Request $request)
    {
        //dd($request->except(['_token', 'submit']));
        //yang tidak masukan kedalam database adalah _token dan submit
        Buku::create($request->except(['_token', 'submit']));
        return redirect('/buku');
    }

    public function edit($id)
    {
        $data = [
            'title' => "Edit Data Buku",
            'buku'  => Buku::find($id)
        ];
        return view('buku.edit')->with($data);
    }

    public function update($id, Request $request)
    {
        $buku = Buku::find($id);
        $buku->update($request->except(['_token', 'submit']));
        return redirect('/buku');
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}