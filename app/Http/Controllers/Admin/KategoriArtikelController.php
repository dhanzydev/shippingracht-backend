<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriArtikel;
use Illuminate\Support\Str;


class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = KategoriArtikel::all();
        return view('pages-admin.kategori-artikel.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages-admin.kategori-artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $slug = Str::slug($request->nama_kategori);

        $post = KategoriArtikel::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => $slug,
        ]);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('kategori-artikel.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('kategori-artikel.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriArtikel $kategoriArtikel)
    {
        return view ('pages-admin.kategori-artikel.update', compact('kategoriArtikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriArtikel $kategoriArtikel)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $post = KategoriArtikel::findOrFail($kategoriArtikel->id);

        $slug = Str::slug($request->nama_kategori);

        $post->update([
            'nama_kategori' => $request->nama_kategori,
            'slug' => $slug
        ]);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('kategori-artikel.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('kategori-artikel.create')->with(['error' => 'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriArtikel $kategoriArtikel)
    {
        $post = KategoriArtikel::findOrFail($kategoriArtikel->id);
        $post->delete();

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('kategori-artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('kategori-artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
