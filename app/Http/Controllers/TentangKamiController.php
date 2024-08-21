<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\TentangPemilu;
use App\Models\Berita;
use App\Models\Partai;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tp = TentangPemilu::paginate(3);
        $b = Berita::where('berita_utama', 'ya')->first();
        $p = Partai::paginate(4);
        return view('home', compact('tp', 'b', 'p'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TentangKami $tentangKami)
    {

    }   //

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TentangKami $tentangKami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TentangKami $tentangKami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TentangKami $tentangKami)
    {
        //
    }

    public function all()
    {
        $tentangKami =  TentangKami::find('TK001');
        return view('tentangkami', compact('tentangKami'));
    }

}
