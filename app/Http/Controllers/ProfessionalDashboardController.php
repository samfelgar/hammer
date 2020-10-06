<?php

namespace App\Http\Controllers;

use App\Exceptions\ProfessionalNotFoundException;
use App\Professional;
use Illuminate\Http\Request;

class ProfessionalDashboardController extends Controller
{
    /**
     * @param Professional $professional
     * @throws ProfessionalNotFoundException
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Professional $professional)
    {
        if ($professional->tipo !== Professional::PROFESSIONAL) {
            throw new ProfessionalNotFoundException();
        }
        return view('professionals.dashboard', [
            'professional' => $professional,
        ]);
    }
}
