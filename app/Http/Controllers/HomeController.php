<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'client' => Auth::user(),
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
