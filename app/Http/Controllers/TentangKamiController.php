<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
