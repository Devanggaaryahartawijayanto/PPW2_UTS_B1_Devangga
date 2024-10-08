<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pemain;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Pemain::all();

        return view('pemain.index',compact('data_pemain'));
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
        $pemain=new Pemain();
        $pemain->nama_pemain = $request->nama_pemain;
        $pemain->no_punggung = $request->no_punggung;
        $pemain->posisi = $request->posisi;
        $pemain->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
