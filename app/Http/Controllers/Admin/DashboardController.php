<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Materi;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $add = '@';
        $username = $user->username;
        $displayUsername = $add . $username;
        $nama = $user->name;
        $gender = $user->gender;
        $photo = $user->picture;
        $listArtikel = Artikel::with('kategori')->limit(5)->latest()->get();
        $listMateri = Materi::limit(5)->latest()->get();

        $member = User::count();
        $artikel = Artikel::count();
        $materi = Materi::count();

        return view('pages-admin.dashboard', compact('member', 'artikel', 'materi', 'displayUsername', 'nama', 'listArtikel', 'listMateri', 'gender', 'photo'));
    }
}
