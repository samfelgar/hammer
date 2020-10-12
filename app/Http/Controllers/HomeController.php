<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Advertisement;
use App\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $ad = Advertisement::latest()->limit(12)->get();
        $featured = $ad->slice(0,3);
        return view('home', [
            'client' => Auth::user(),
            'advertisements' => $ad,
            'featured' => $featured,
            'categorias' => Category::all(),
        ]);
    }
    public function sobre()
    {
        return view('sobre');
    }
    public function contato()
    {
        return view('contato');
    }

}
