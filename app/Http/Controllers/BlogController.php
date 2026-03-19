<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('pages.blog');
    }
    public function blogdetail()
    {
        return view('pages.blog-detail');
    }
}
