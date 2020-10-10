<?php

namespace App\Http\Controllers;

use App\Exceptions\ProfessionalNotFoundException;
use App\Professional;
use Illuminate\Http\Request;

class ProfessionalDashboardController extends Controller
{
    /**
     * @param Professional $professional
     * @return \Illuminate\Http\Response
     * @throws ProfessionalNotFoundException
     */
    public function index(Professional $professional)
    {
        if ($professional->tipo !== Professional::PROFESSIONAL) {
            throw new ProfessionalNotFoundException();
        }
        return response()->view('professionals.dashboard', [
            'professional' => $professional,
        ]);
    }
}
