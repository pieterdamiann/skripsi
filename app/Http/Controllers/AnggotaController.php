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
use App\Models\Anggota;
use App\Models\Partai;

class AnggotaController extends Controller
{

    public function create($partai_id): View
    {
        return view('admin.tambahanggota', compact('partai_id'));
    }

    public function store(Request $request, $partai_id): RedirectResponse
    {
        $request->validate([
            'nama_calon' => ['required', 'string', 'max:255'],
            'daerah_pilih' => ['required', 'string', 'max:255'],
            'nomor_urut' => ['required', 'string', 'max:255'],
            'filename' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $anggota = new Anggota();
        $anggota->partai_id = $partai_id;
        $anggota->nama_calon = $request->nama_calon;
        $anggota->daerah_pilih = $request->daerah_pilih;
        $anggota->nomor_urut = $request->nomor_urut;

        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $anggota->filename = $imageName;

        }
        $anggota->save();

        return redirect(route('listanggota', ['partai_id' => $partai_id]));   
    }

    public function listanggota($partai_id): View
    {
        $anggota = Anggota::where('partai_id', $partai_id)->get();
        return view('admin.pilihanggota', compact('anggota', 'partai_id'));
    }
    public function list(): View
    {
        $partai = Partai::all();
        $anggota = "anggota";
        return view('admin.adpartai', compact('partai', 'anggota'));
    }

    public function edit($partai_id, $id): View
    {   
        $anggota = Anggota::where('partai_id', $partai_id)->find($id);
        return view('admin.tambahanggota', compact('anggota', 'partai_id'));
    }

    public function update(Request $request, $partai_id, $id): RedirectResponse
    {
        $request->validate([
            'nama_calon' => ['required', 'string', 'max:255'],
            'daerah_pilih' => ['required', 'string', 'max:255'],
            'nomor_urut' => ['required', 'string', 'max:255'],
            'filename' => ['image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $anggota = Anggota::find($id);
        $anggota->partai_id = $partai_id;
        $anggota->nama_calon = $request->nama_calon;
        $anggota->daerah_pilih = $request->daerah_pilih;
        $anggota->nomor_urut = $request->nomor_urut;

        if($request->hasFile('filename'))
        {
            $files = $request->file('filename');
            $imageName = time().'.'.$request->filename->extension();
            $request->filename->move(public_path('assets'), $imageName);
            $anggota->filename = $imageName;

        }
        $anggota->save();

        return redirect(route('listanggota', ['partai_id' => $partai_id]));   
    }

    public function destroy($partai_id, $id): RedirectResponse
    {   
        $anggota = Anggota::where('partai_id', $partai_id)->find($id);
        $anggota->delete();
        return redirect(route('listanggota', ['partai_id' => $partai_id]));
    }
}
