<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Materi;

class BacaMateriController extends Controller
{
    public function index(Materi $materi, $id)
    {
        $data = DB::table('materi')->where(['id' => $id])->first();
        $materi->incrementViewsCount($id);

        return view('pages.materi', compact('data'));
    }
}
