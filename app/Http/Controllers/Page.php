<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Page extends Controller
{
    function getdata()
    {
        $data["mobil"] = DB::table('cars')->get();
        $data['kategori'] = DB::table('cars')->select("kategori")->get();
        return view("index", compact("data"));
    }
}
