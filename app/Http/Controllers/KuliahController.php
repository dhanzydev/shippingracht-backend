<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class KuliahController extends Controller
{
    public function index()
    {
        $data = DB::table('materi')->paginate(12);
        return view('pages.kuliah', compact('data'));
    }
}
