<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PartaiController extends Controller
{
    public function create(): View
    {
        return view('admin.tambahpartai');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'tanggal_terbit' => ['required', 'date'],
            'nama_penerbit' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'deskripsi' => ['required', 'string'],
            'berita_utama' => ['required', 'string', 'max:255'],
            'filename' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->tanggal_terbit = $request->tanggal_terbit;
        $berita->nama_penerbit = $request->nama_penerbit;
        $berita->link = $request->link;
        $berita->deskripsi = $request->deskripsi;
        $berita->berita_utama = $request->berita_utama;

        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $berita->filename = 'assets/'.$imageName;

        }

        $berita->save();

        return redirect(route('add.berita'));   
    }
}
