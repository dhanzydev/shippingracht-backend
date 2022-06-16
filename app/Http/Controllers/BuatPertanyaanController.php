<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuatPertanyaanController extends Controller
{
    public function index()
    {
        return view('pages.buat-pertanyaan');
    }

    public function store(Request $request)
    {

    }
}
