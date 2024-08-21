<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function create(): View
    {
        return view('admin.tambahberita');
    }

    public function show(): View
    {
        $berita = [];
        $berita_utama = [];
        foreach (Berita::all() as $ber){
            if($ber->berita_utama == 'ya'){
                $berita_utama[] = $ber;
            }else{
                $berita[] = $ber;
            }
        }
        
        return view('berita', compact('berita', 'berita_utama'));
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
            $berita->filename = $imageName;

        }

        $berita->save();

        return redirect(route('listberita'));   
    }
    public function list(): View
    {
        $berita = Berita::all();
        return view('admin.adberita', compact('berita'));
    }

    public function edit($id): View
    {   
        $berita = Berita::find($id);
        return view('admin.tambahberita', compact('berita'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'tanggal_terbit' => ['required', 'date'],
            'nama_penerbit' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'deskripsi' => ['required', 'string'],
            'berita_utama' => ['required', 'string', 'max:255'],
            'filename' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);
        $berita = Berita::find($id);
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
            $berita->filename = $imageName;
        }
        $berita->save();
        return redirect(route('listberita'));
    }

    public function destroy($id): RedirectResponse
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect(route('listberita'));
    }
}

