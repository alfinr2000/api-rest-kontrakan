<?php

namespace App\Http\Controllers;

use App\Models\Kontrakan;
use Illuminate\Http\Request;

class KontrakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kontrakan::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kontrakan = new Kontrakan();
        $kontrakan->alamat = $request->alamat;
        $kontrakan->jumlahKM = $request->jumlahKM;
        $kontrakan->jumlahKT = $request->jumlahKT;
        $kontrakan->harga = $request->harga;
        $kontrakan->save();

        return "Data kontrakan Berhasil di Tambah";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kontrakan  $kontrakan
     * @return \Illuminate\Http\Response
     */
    public function show(Kontrakan $kontrakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kontrakan  $kontrakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kontrakan $kontrakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kontrakan  $kontrakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $alamat = $request->alamat;
        $jumlahKT = $request->jumlahKT;
        $jumlahKM = $request->jumlahKM;
        $harga = $request->harga;

        $kontrakan = Kontrakan::find($id);
        $kontrakan->alamat = $alamat;
        $kontrakan->jumlahKT = $jumlahKT;
        $kontrakan->jumlahKT = $jumlahKT;
        $kontrakan->jumlahKM = $jumlahKM;
        $kontrakan->harga = $harga;
        $kontrakan->save();

        return "Data Kontrakan Berhasil Di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kontrakan  $kontrakan
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $kontrakan = Kontrakan::find($id);
        $kontrakan->delete();
    }
}
