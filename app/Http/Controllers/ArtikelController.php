<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\TagArtikel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->paginate(12);
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('artikel', 'kategori', 'tagArtikel'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $artikel = Artikel::where('judul_artikel', 'like', '%' . $search . '%')->latest()->paginate(12);
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('artikel', 'kategori', 'tagArtikel'));
    }

    public function categories($slug)
    {
        $data = KategoriArtikel::where('slug', $slug)->first();
        $idArtikel = $data->id;
        $artikel = Artikel::where('kategori_id', '=', $idArtikel)->latest()->paginate(12);
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('kategori', 'tagArtikel', 'artikel'));
    }

    // public function tags()
    // {
    //     $data = KategoriArtikel::where('slug', $slug)->first();
    //     $idArtikel = $data->id;
    //     $artikel = Artikel::where('kategori_id', '=', $idArtikel)->latest()->paginate(12);
    //     $kategori = KategoriArtikel::all();
    //     $tagArtikel = TagArtikel::all();
    //     return view('pages.artikel', compact('kategori', 'tagArtikel', 'artikel'));
    // }
}
