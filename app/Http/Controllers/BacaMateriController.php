<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BacaMateriController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = DB::table('materi')->where(['id' => $id])->first();

        // $heading = $data->materi;

        // $containshead1 = Str::contains($data->materi, ['<h1>', '</h1>']);
        // $containshead2 = Str::contains($data->materi, ['<h2>', '</h2>']);
        // $containshead3 = Str::contains($data->materi, ['<h3>', '</h3>']);
        // $containshead4 = Str::contains($data->materi, ['<h4>', '</h4>']);
        // $containshead5 = Str::contains($data->materi, ['<h5>', '</h5>']);
        // $containshead6 = Str::contains($data->materi, ['<h6>', '</h6>']);

        // if($containshead1){
        //     $header = strip_tags($heading);
        // }
        // elseif ($containshead2) {
        //     $header = strip_tags($heading);
        // }elseif ($containshead3) {
        //     $header = strip_tags($heading);
        // }elseif ($containshead4) {
        //     $header = Str::remove('<h4>', '</h4>', $containshead4);
        // }elseif ($containshead5) {
        //     $header = Str::remove('<h5>', '</h5>', $containshead5);
        // }else{
        //     $header = Str::remove('<h6>', '</h6>', $containshead6);
        // }

        // dd($header);

        return view('pages.materi',compact('data'));
    }
}
