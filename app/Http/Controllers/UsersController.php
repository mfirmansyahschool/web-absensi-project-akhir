<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function identitas()
    {
        $user = Auth::user()->user_detail;
        return view('account.identitas', compact('user'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function akun()
    {
        //
        return view('account.akun', ['user' => User::find(Auth::user()->id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function akunUpdate(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string|max:255|unique:users,username,' . Auth::user()->id,
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::find(Auth::user()->id);
        $user->update([
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('message', 'Berhasil Mengupdate Akun!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function identitasUpdate(Request $request)
    {
        $this->validate($request, [
            'nama' => 'string',
            'email' => 'email',
            'no_telp' => ''
        ]);

        if (empty(Auth::user()->user_detail)) {
            Auth::user()->user_detail()->create([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp
            ]);
        } else{
            Auth::user()->user_detail()->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp
            ]);
        }
        
        return redirect()->back()->with('message', 'Berhasil Mengubah Data!');
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
