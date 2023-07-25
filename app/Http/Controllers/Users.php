<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Session;

class Users extends Controller
{

    public function register()
    {
        return view('login');
    }

    public function actionregister(Request $request)
    {

        $user = DB::table('users')->insert(
            [
                'email' => $request->email,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'level' => $request->level,
                'password' => Hash::make($request->password),
                "created_at" =>  DB::raw('CURRENT_TIMESTAMP'),
                "updated_at" =>  DB::raw('CURRENT_TIMESTAMP'),
            ]
        );

        if ($user) {
            Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');
        } else {
            Session::flash('message', 'Register Gagal. Silahkan Ulangi Registrasi akun.');
        }

        return redirect('register');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect('register');
        } else {
            return view('login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }

    function profile()
    {

        $data = DB::table('users')
            ->where('id', "=", auth::user()->id)
            ->first();
        if (auth::user()->level) {
            $dataView = "profilelender";
        } else {
            $dataView = "profileborrower";
        };

        return view($dataView, (array) $data);
    }

    function profileupdate(Request $request)
    {
        $update = DB::table('users')->where('id', auth::user()->id)->update(
            [
                'email' => $request->email,
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
                'password' => Hash::make($request->password),
                "updated_at" =>  DB::raw('CURRENT_TIMESTAMP'),
            ]
        );
        if ($update) {
            Session::flash('messagesuccess', 'Update Data Berhasil');
        } else {
            Session::flash('messageerror', 'Update Data Gagal');
        }

        return redirect('profile');
    }
}
