<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class mobil extends Controller
{
    public function actioninsertmobil(Request $request)
    {

        $cars = DB::table('cars')->insert(
            [
                'user_id' => auth::user()->id,
                'nama_mobil' => $request->nama,
                'merk' => $request->merk,
                'kategori' => $request->kategori,
                'jumlah' => $request->jumlah,
                'hargasewa' => $request->hargasewa,
                'deskripsi' => $request->deskripsi,
                "created_at" =>  DB::raw('CURRENT_TIMESTAMP'),
                "updated_at" =>  DB::raw('CURRENT_TIMESTAMP'),
            ]
        );

        if ($cars) {
            Session::flash('messagemobilsuccess', 'Input Berhasil');
        } else {
            Session::flash('messagemobilerror', 'Input Gagal');
        }

        return redirect('profile');
    }
}
