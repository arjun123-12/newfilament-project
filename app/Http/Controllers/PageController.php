<?php

namespace App\Http\Controllers;




class PageController extends Controller
{


    public function home()
    {
        // $services = Service::whereNull('suburbname')->get();

        // return view('pages.home', compact('services'));
        return view('pages.home');
    }
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
        // $services = Service::whereNull('suburbname')->get();
        return view('pages.service');
    }
    public function cities()
    {
        return view('pages.cities');
    }
}
