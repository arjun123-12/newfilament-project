<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function servicedetail($slug)
    {

        $service = Service::where('slug', $slug)->firstOrFail();

        return view('pages.service-detail', compact('service'));
    }
}
