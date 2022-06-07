<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Materi;


class KuliahController extends Controller
{
    public function index(Request $request)
    {
        $data = Materi::latest();

        $page = DB::table('materi')->paginate(12);

        if(request('search')){
            $data->where('title', 'like', '%' . request('search') . '%');
        }

        return view('pages.kuliah', [
            "data" => $data->get(),
            "page" => $page
        ]);
    }


}
