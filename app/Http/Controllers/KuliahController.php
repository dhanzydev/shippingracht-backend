<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Materi;


class KuliahController extends Controller
{
    public function index(Request $request)
    {
        $data = Materi::latest()->paginate(12);

        return view('pages.kuliah', [
            "data" => $data,
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $data = Materi::where('title', 'like', '%' . $search . '%')->latest()->paginate(12);
        return view('pages.kuliah', compact('data'));
    }
}
