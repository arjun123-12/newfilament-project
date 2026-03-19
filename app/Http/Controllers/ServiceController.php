<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function servicedetail()
    {
        return view('pages.service-detail');
    }
}
