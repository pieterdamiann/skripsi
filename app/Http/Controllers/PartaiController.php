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
use App\Models\Partai;
use App\Models\Anggota;
use Illuminate\Pagination\Paginator;



class PartaiController extends Controller
{
    public function create(): View
    {
        return view('admin.tambahpartai');
    }

    public function show(): View
    {
        $partai = [];
        foreach(array_chunk(Partai::all()->toArray(), 5) as $chunk) {
            $partai[] = $chunk;
        }
        return view('partai', compact('partai'));
    }

    public function detail($id): View
    {
        $partai = Partai::find($id);
        $anggota = Anggota::where('partai_id', $id)->paginate(5)->withPath('?page=');
        return view('detailpartai', compact('partai', 'anggota'));
    }
    
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'partai' => ['required', 'string', 'max:255'],
            'tanggal_dibentuk' => ['required', 'date'],
            'ketua_umum' => ['required', 'string', 'max:255'],
            'jumlah_kursi_dpr' => ['required', 'string', 'max:255'],
            'jumlah_kursi_dpd' => ['required', 'string', 'max:255'],
            'jumlah_kursi_dprd' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'filename' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $partai = new Partai();
        $partai->partai = $request->partai;
        $partai->tanggal_dibentuk = $request->tanggal_dibentuk;
        $partai->ketua_umum = $request->ketua_umum;
        $partai->jumlah_kursi_dpr = $request->jumlah_kursi_dpr;
        $partai->jumlah_kursi_dpd = $request->jumlah_kursi_dpd;
        $partai->jumlah_kursi_dprd = $request->jumlah_kursi_dprd;
        $partai->link = $request->link;

        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $partai->filename = $imageName;

        }

        $partai->save();

        return redirect(route('listpartai'));   
    }
    public function list(): View
    {
        $partai = Partai::all();
        return view('admin.adpartai', compact('partai'));
    }

    public function edit($id): View
    {   
        $partai = Partai::find($id);
        return view('admin.tambahpartai', compact('partai'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'partai' => ['required', 'string', 'max:255'],
            'tanggal_dibentuk' => ['required', 'date'],
            'ketua_umum' => ['required', 'string', 'max:255'],
            'jumlah_kursi_dpr' => ['required', 'string', 'max:255'],
            'jumlah_kursi_dpd' => ['required', 'string', 'max:255'],
            'jumlah_kursi_dprd' => ['required', 'string', 'max:255'],
            'link' => ['nullable', 'string'],
            'filename' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $partai = Partai::find($id);
        $partai->partai = $request->partai;
        $partai->tanggal_dibentuk = $request->tanggal_dibentuk;
        $partai->ketua_umum = $request->ketua_umum;
        $partai->jumlah_kursi_dpr = $request->jumlah_kursi_dpr;
        $partai->jumlah_kursi_dpd = $request->jumlah_kursi_dpd;
        $partai->jumlah_kursi_dprd = $request->jumlah_kursi_dprd;
        $partai->link = $request->link;


        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $partai->filename = $imageName;

        }
        $partai->save();

        return redirect(route('listpartai'));
    }

    public function destroy($id): RedirectResponse
    {
        $partai = Partai::find($id);
        $partai->delete();
        return redirect(route('listpartai'));
    }
}
