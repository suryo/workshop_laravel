<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $response_tbl_product = DB::select('select * from tbl_product');
        $jumlah_data =(count($response_tbl_product));
        return view('product.list',compact("response_tbl_product"));
    }

    public function add()
    {
        return view('product.add');
    }
}
