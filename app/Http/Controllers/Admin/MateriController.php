<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Str;
use Carbon\Carbon;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = Materi::all();
        return view('pages-admin.materi.index', compact('materi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages-admin.materi.create');
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
            'title' => 'required',
            'materi' => 'required'
        ]);

        $slug = Str::slug($request->title);
        Carbon::setLocale('id');
        $dt = Carbon::now();
        $date = $dt->toFormattedDateString($request->created_at);
        $dateFormat = Carbon::parse($date)->translatedFormat('d F Y h:i:s');

        $post = Materi::create([
            'title' => $request->title,
            'slug' => $slug,
            'materi' => $request->materi,
            'created_at' => $dateFormat,
        ]);

        // dd($post);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('materi.create')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        return view('pages-admin.materi.update', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi)
    {
        $request->validate([
            'title' => 'required',
            'materi' => 'required'
        ]);

        $slug = Str::slug($request->title);
        Carbon::setLocale('id');
        $dt = Carbon::now();
        $date = $dt->toFormattedDateString($request->created_at);
        $dateFormat = Carbon::parse($date)->translatedFormat('d F Y h:i:s');

        $post = Materi::findOrFail($materi->id);

        $post->update([
            'title' => $request->title,
            'slug' => $slug,
            'materi' => $request->materi,
            'updated_at' => $dateFormat,
        ]);

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil Disunting!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('materi.edit')->with(['error' => 'Data Gagal Disunting!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        $post = Materi::findOrFail($materi->id);
        $post->delete();

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('materi.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('materi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
