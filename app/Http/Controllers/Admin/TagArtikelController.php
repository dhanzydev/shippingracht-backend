<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TagArtikel;
use Illuminate\Support\Str;

class TagArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tag = TagArtikel::all();
        return view('pages-admin.tag-artikel.index', compact('tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages-admin.tag-artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->tags);

        $request->validate([
            'tags' => 'required',
        ]);

        $post = TagArtikel::create([
            'tags' => $request->tags,
            'slug' => $slug,
        ]);


        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('tag-artikel.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tag-artikel.create')->with(['error' => 'Data Gagal Disimpan!']);
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
    public function edit(TagArtikel $tagArtikel)
    {
        return view('pages-admin.tag-artikel.update', compact('tagArtikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TagArtikel $tagArtikel)
    {
        $slug = Str::slug($request->tags);
        $request->validate([
            'tags' => 'required'
        ]);

        $post = TagArtikel::findOrFail($tagArtikel->id);

        $post->update([
            'tags' => $request->tags,
            'slug' => $slug,
        ]);

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('tag-artikel.index')->with(['success' => 'Data Berhasil Diubah!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tag-artikel.edit')->with(['error' => 'Data Gagal Diubah!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TagArtikel $tagArtikel)
    {
        $post = TagArtikel::findOrFail($tagArtikel->id);
        $post->delete();

        if ($post) {
            //redirect dengan pesan sukses
            return redirect()->route('tag-artikel.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('tag-artikel.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
