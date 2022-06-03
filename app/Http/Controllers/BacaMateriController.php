<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BacaMateriController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = DB::table('materi')->where(['id' => $id])->first();
        return view('pages.materi',compact('data'));
    }
}
