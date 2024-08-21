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
use App\Models\TentangPemilu;

class TentangPemiluController extends Controller
{
    public function create(): View
    {
        return view('admin.tambahtp');
    }

    public function show(): View
    {
        $tp = TentangPemilu::all();
        return view('tentangpemilu', compact('tp'));
    }

    public function detail($id): View
    {   
        $tp = TentangPemilu::find($id);
        return view('suratpemilu', compact('tp'));
    }
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'tanggal_terbit' => ['required', 'date'],
            'nama_penerbit' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'deskripsi' => ['required', 'string'],
            'filename' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        
        $tp = new TentangPemilu();
        $tp->judul = $request->judul;
        $tp->tanggal_terbit = $request->tanggal_terbit;
        $tp->nama_penerbit = $request->nama_penerbit;
        $tp->link = $request->link;
        $tp->deskripsi = $request->deskripsi;

        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $tp->filename = $imageName;

        }

        $tp->save();

        return redirect(route('listtp'));   
    }
    public function list(): View
    {
        $tp = TentangPemilu::all();
        return view('admin.adtp', compact('tp'));
    }

    public function edit($id): View
    {   
        $tp = TentangPemilu::find($id);
        return view('admin.tambahtp', compact('tp'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'judul' => ['required', 'string', 'max:255'],
            'tanggal_terbit' => ['required', 'date'],
            'nama_penerbit' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'deskripsi' => ['required', 'string'],
            'filename' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);
        $tp = TentangPemilu::find($id);
        $tp->judul = $request->judul;
        $tp->tanggal_terbit = $request->tanggal_terbit;
        $tp->nama_penerbit = $request->nama_penerbit;
        $tp->link = $request->link;
        $tp->deskripsi = $request->deskripsi;
        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $tp->filename = $imageName;
        }
        $tp->save();
        return redirect(route('listtp'));
    }

    public function destroy($id): RedirectResponse
    {
        $tp = TentangPemilu::find($id);
        $tp->delete();
        return redirect(route('listtp'));
    }
}
