<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\KategoriArtikel;
use App\Models\TagArtikel;
use App\Models\SaveTagArtikel;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::latest()->where('status', '=', 'Terbit')->paginate(12);
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('artikel', 'kategori', 'tagArtikel'));
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $artikel = Artikel::where('judul_artikel', 'like', '%' . $search . '%')->where('status', '=', 'Terbit')->latest()->paginate(12);
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('artikel', 'kategori', 'tagArtikel'));
    }

    public function categories($slug)
    {
        $data = KategoriArtikel::where('slug', $slug)->first();
        $idArtikel = $data->id;
        $artikel = Artikel::where('kategori_id', '=', $idArtikel)->where('status', '=', 'Terbit')->latest()->paginate(12);
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('kategori', 'tagArtikel', 'artikel'));
    }

    public function tags($slug)
    {
        $data = TagArtikel::where('slug', $slug)->first();
        $idTags = $data->id;
        $dataTags = SaveTagArtikel::where('tag_artikel_id', '=', $idTags)->get();
        $idArtikel = $dataTags->pluck('artikel_id');
        if ($idArtikel->count() > 0) {
            $artikel = Artikel::whereIn('id', $idArtikel)->where('status', '=', 'Terbit')->latest()->paginate(12);
        } else {
            $artikel = Artikel::where('status', '=', 'Terbit')->latest()->paginate(12);
        }
        $kategori = KategoriArtikel::all();
        $tagArtikel = TagArtikel::all();
        return view('pages.artikel', compact('kategori', 'tagArtikel', 'artikel'));
    }
}
