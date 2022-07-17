<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('pages-admin.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, User $user)
    {
        $user = Auth::user();
        $id = $user->id;
        $post = User::findOrFail($id);

        $email = $user->email;

        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'gender' => 'required',
            'picture' => 'image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($request->file('picture') == "") {
            $post->update([
                'name' => $request->name,
                'username' => $request->username,
                'gender' => $request->gender,
            ]);
            return redirect()->route('profile.index')->with('success', 'Profile Berhasil Diubah!');
        } else {
            Storage::disk('local')->delete('public/profil/' . $user->picture);
            $photo = $request->file('picture')->store('public/profil');
            $post->update([
                'name' => $request->name,
                'username' => $request->username,
                'gender' => $request->gender,
                'picture' => $photo
            ]);
        }
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
