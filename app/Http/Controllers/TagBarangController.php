<?php

namespace App\Http\Controllers;

use App\Barang;
use App\TagBarang;
use App\Tag;
use Illuminate\Http\Request;

class TagBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Barang $barang)
    {
        $tags = Tag::all();
        return view('tag_barang.form', compact('barang', 'tags'));
    }

    public function input_tag($id)
    {
        $barang = Barang::find($id);
        $tags = Tag::all();
        return view('tag_barang.form', compact('barang', 'tags'));
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
            'id_barang' => 'required',
            'id_tag' => 'required',
        ]);

        $p = Barang::find($request->id_barang);
        $p->tags()->attach($request->id_tag);

        return redirect()->route('barang.show', $request->id_barang);
    }

    public function delete_tag($id, $id2)
    {
        $tagBarang = Barang::find($id);
        $tagBarang->tags()->detach($id2);
        return redirect()->route('barang.show', $id);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\TagBarang  $tagBarang
     * @return \Illuminate\Http\Response
     */
    public function show(TagBarang $tagBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TagBarang  $tagBarang
     * @return \Illuminate\Http\Response
     */
    public function edit(TagBarang $tagBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TagBarang  $tagBarang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TagBarang $tagBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TagBarang  $tagBarang
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagBarang $tagBarang)
    {
        //
    }
}
