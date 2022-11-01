<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class IndexController extends Controller
{

    public function index()
    {
        $lstCategory = Category::orderBy('id','DESC')->get();
        return view('layouts.main',[
            'lstCategory' => $lstCategory
        ]);
    }
    public function category()
    {
        $lstCategory = Category::orderBy('id','DESC')->get();
        dd($lstCategory);
        return view('layouts.main',[
            'lstCategory' => $lstCategory
        ]);
    }
}
