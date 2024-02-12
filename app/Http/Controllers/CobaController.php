<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function index()
    {
        $angka1 = 1;
        $angka2 = 4;
        $angka3 = $angka1 + $angka2;
        $hasil = $angka1 . $angka2;
        $nama = "Kucing";
        return view('coba',compact("nama","angka3"));
    }
}
