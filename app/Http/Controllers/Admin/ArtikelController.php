<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\SaveTagArtikel;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('pages-admin.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag = DB::table('tags')->pluck('id', 'tags');
        $kategoriArtikel = DB::table('kategori_artikel')->pluck('id','nama_kategori');
        return view('pages-admin.artikel.create', compact('kategoriArtikel', 'tag'));
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
            'judul_artikel' => 'required',
            'kategori_id' => 'required',
            'foto_sampul' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'konten' => 'required',
            'tags' => 'required',
        ]);

        $slug = Str::slug($request->judul_artikel);
        $photo = $request->file('foto_sampul')->store('public/sampul');

        $post = Artikel::create([
            'judul_artikel' => $request->judul_artikel,
            'slug' => $slug,
            'konten' => $request->konten,
            'foto_sampul' => $photo,
            'kategori_id' => $request->kategori_id,
            'user_id' => auth()->id()
        ]);

        $idArtikel = $post->id;
        $tagArtikel = $request->input('tags');

        $count = count( $request->input('tags'));

        for ($i=0; $i < $count; $i++) {
            SaveTagArtikel::insertGetId([
                'artikel_id' => $idArtikel,
                'tag_artikel_id' => $tagArtikel[$i],
            ]);
        }

        dd($post);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('artikel.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        return view('pages-admin.artikel.detail', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        $kategoriArtikel = DB::table('kategori_artikel')->pluck('id', 'nama_kategori');
        $tag = DB::table('tags')->pluck('id', 'tags');
        return view('pages-admin.artikel.update', compact('artikel','kategoriArtikel', 'tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'judul_artikel' => 'required',
            'kategori_id' => 'required',
            'foto_sampul' => 'image|mimes:jpg,png,jpeg|max:2048',
            'konten' => 'required',
            'tags' => 'required',
            'status' => 'required',
        ]);

        $slug = Str::slug($request->judul_artikel);
        $post = Artikel::findOrFail($artikel->id);

        $idArtikel = $post->id;
        $tagArtikel = $request->input('tags');

        $count = count( $request->input('tags'));

        if ($request->file('photo') == "") {
            $post->update([
                'judul_artikel' => $request->judul_artikel,
                'slug' => $slug,
                'konten' => $request->konten,
                'kategori_id' => $request->kategori_id,
                'status' => $request->status,
            ]);

            DB::table('artikel_tag')->where('artikel_id', '=', $idArtikel)->delete();
            for ($i=0; $i < $count; $i++) {


                SaveTagArtikel::insertGetId([
                    'artikel_id' => $idArtikel,
                    'tag_artikel_id' => $tagArtikel[$i],
                ]);
            }
        }else{
            Storage::disk('local')->delete('public/sampul/'.$artikel->foto_sampul);
            $photo = $request->file('photo')->store('public/sampul');

            $post->update([
                'judul_artikel' => $request->judul_artikel,
                'slug' => $slug,
                'konten' => $request->konten,
                'kategori_id' => $request->kategori_id,
                'foto_sampul' => $photo,
                'status' => $request->status,
            ]);

            for ($i=0; $i < $count; $i++) {
                SaveTagArtikel::insertGetId([
                    'artikel_id' => $idArtikel,
                    'tag_artikel_id' => $tagArtikel[$i],
                ]);
            }
        }
        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Diubah!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('artikel.edit')->with(['error' => 'Data Gagal Diubah!']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $post = Artikel::findOrFail($artikel->id);
        Storage::disk('local')->delete($artikel->photo);
        $post->delete();

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
