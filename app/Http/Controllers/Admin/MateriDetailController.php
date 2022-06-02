<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;
use Illuminate\Support\Facades\DB;

class MateriDetailController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = DB::table('materi')->where(['id' => $id])->first();
        return view('pages-admin.materi.detail',compact('data'));
    }
}
