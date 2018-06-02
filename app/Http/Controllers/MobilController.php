<?php

namespace App\Http\Controllers;

use App\mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil = mobil::all();
        return view('mobil.index',compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'nama' => 'required|',
            'plat_nomor' => 'required|unique:mobil',
            'kapasitas' => 'required|',
            'harga' => 'required|',
            'jenis' => 'required|',
            'warna' => 'required|',
            'tahun' => 'required|',
            'perseneling' => 'required'
        ]);
        $mobil= new mobil;
        $mobil->nama = $request->nama;
        $mobil->plat_nomor = $request->plat_nomor;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->harga = $request->harga;
        $mobil->jenis = $request->jenis;
        $mobil->warna = $request->warna;
        $mobil->tahun = $request->tahun;
        $mobil->perseneling = $request->perseneling;
        $mobil->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function show(mobil $mobil)
    {
        $mobil = mobil::findOrFail($id);
        return view('mobil.show',compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function edit(mobil $mobil)
    {
        $mobil = mobil::findOrFail($id);
        return view('mobil.edit',compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mobil $mobil)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'plat_nomor' => 'required|unique:mobil',
            'kapasitas' => 'required|',
            'harga' => 'required|',
            'jenis' => 'required|',
            'warna' => 'required|',
            'tahun' => 'required|',
            'perseneling' => 'required'
        ]);
        $mobil= new mobil;
        $mobil->nama = $request->nama;
        $mobil->plat_nomor = $request->plat_nomor;
        $mobil->kapasitas = $request->kapasitas;
        $mobil->harga = $request->harga;
        $mobil->jenis = $request->jenis;
        $mobil->warna = $request->warna;
        $mobil->tahun = $request->tahun;
        $mobil->perseneling = $request->perseneling;
        $mobil->save();
        return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mobil  $mobil
     * @return \Illuminate\Http\Response
     */
    public function destroy(mobil $mobil)
    {
        $mobil = mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
