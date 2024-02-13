<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $response_tbl_category = DB::select('select * from tbl_category');
        $jumlah_data =(count($response_tbl_category));
        return view('category.list',compact("response_tbl_category"));
    }

    public function add()
    {
        return view('category.add');
    }

    public function save(Request $request)
    {
        $category = $request->category;
        DB::insert('INSERT INTO tbl_category (category, status) VALUES ("'.$category.'", "active")');
        return redirect('/category'); 
        //return view('category.add');
    }
}
