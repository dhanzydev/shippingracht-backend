<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages-admin.user.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required|min:8',
            'gender' => 'required',
        ]);

        $password = Hash::make($request->password);
        $email = $request->email;

        if (DB::table('users')->where('email', '=', $email)->exists()) {
            return redirect()->route('pengguna.index')->with('error', 'Email Sudah Digunakan');
        } else {
            $post = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'username' => $request->username,
                'password' => $password,
                'gender' => $request->gender,
            ]);

            if ($post) {
                //redirect dengan pesan sukses
                return redirect()->route('pengguna.index')->with('success', 'Pengguna Berhasil Ditambahkan!');
            } else {
                //redirect dengan pesan error
                return redirect()->route('pengguna.index')->with('error', 'Pengguna Gagal Ditambahkan!');
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
