<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        return view(('barang.index'), compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataBaru = true;
        $dataKategori = Kategori::all();
        return view('barang.form', compact('dataBaru', 'dataKategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required',
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'user_id' => 'required',
            'tanggal_menemukan' => 'required',
            'tempat_menemukan' => 'required',
        ]);

        $file = $request->file('gambar');
        $p = new Barang();

        $p->judul = $request->judul;
        $p->gambar = $file->getClientOriginalName();
        $p->deskripsi = $request->deskripsi;
        $p->id_kategori = $request->id_kategori;
        $p->tanggal_menemukan = $request->tanggal_menemukan;
        $p->tempat_menemukan = $request->tempat_menemukan;
        $p->user_id = $request->user_id;

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload, $file->getClientOriginalName());

        $p->save();
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.view', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        $dataBaru = false;
        $dataKategori = Kategori::all();
        return view('barang.form', compact('dataBaru', 'dataKategori', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $this->validate($request, [
            'deskripsi' => 'required',
            'id_kategori' => 'required',
            'user_id' => 'required',
            'tanggal_menemukan' => 'required',
            'tempat_menemukan' => 'required',
        ]);

        $barang->judul = $request->judul;
        $file = $request->file('gambar');
        // dd($file);
        if ($file != null && $file->getSize() > 0) {
            $barang->gambar = $file->getClientOriginalName();
            $tujuan_upload = 'data_file';
            $file->move($tujuan_upload, $file->getClientOriginalName());
        }
        $barang->deskripsi = $request->deskripsi;
        $barang->id_kategori = $request->id_kategori;
        $barang->tanggal_menemukan = $request->tanggal_menemukan;
        $barang->tempat_menemukan = $request->tempat_menemukan;
        $barang->user_id = $request->user_id;

        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
