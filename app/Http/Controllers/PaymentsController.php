<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
    {
        return view('payments.view');
    }
    public function all()
    {
        return view('payments.all');
    }


}