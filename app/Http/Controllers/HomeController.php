<?php

namespace App\Http\Controllers;

use App\Person;
use App\Professional;
use App\User;
use App\Client;
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

    //Funçao para redirecionar pro lugar certo

    public function meusDados()
    {
        switch (Auth::user()->tipo){
            case 0:
                $client = Client::find(Auth::user()->id);
                return redirect()->route('clients.show', $client);
                break;

            case 1:
                $professional = Professional::find(Auth::user()->id);
                return redirect()->route('professionals.show', $professional);
                break;
            case null:
                return route('home');
        }
    }
}
