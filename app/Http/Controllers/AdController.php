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
}
