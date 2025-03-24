<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function ourFleet()
    {
        return view('frontend.our_fleet');
    }
    public function aboutUs()
    {
        return view('frontend.about_us');
    }
    public function services()
    {
        return view('frontend.services');
    }
}