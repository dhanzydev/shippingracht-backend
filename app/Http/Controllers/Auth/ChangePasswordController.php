<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('pages-admin.change-password');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $userPassword = $user->password;

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, $userPassword)) {
            return back()->withErrors(['current_password'=>'password not match']);
        }

        $user->password = Hash::make($request->password);

        $post = $user->save();

        if($post){
        //redirect dengan pesan sukses
            return redirect()->route('ganti-password')->with(['success' => 'Password Berhasil Diubah']);
        }else{
        //redirect dengan pesan error
            return redirect()->route('ganti-password')->with(['error' => 'Password Gagal Diubah']);
        }

    }
}
