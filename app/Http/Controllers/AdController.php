<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function show()
    {
        return view('ads.ad');
    }

    public function new()
    {
        return view('ads.new');
    }  
    public function service()
    {
        return view('ads.service');
    }
    public function search()
    {
        return view('ads.search');
    }
    public function evaluation()
    {
        return view('ads.evaluation');
    }
    public function all()
    {
        return view('ads.all');
    }
}
