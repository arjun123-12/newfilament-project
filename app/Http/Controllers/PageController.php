<?php

namespace App\Http\Controllers;



class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    public function service()
    {
        return view('pages.service');
    }
    public function cities()
    {
        return view('pages.cities');
    }
}
