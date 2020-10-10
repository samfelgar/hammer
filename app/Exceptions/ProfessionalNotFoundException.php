<?php

namespace App\Exceptions;

use Exception;

class ProfessionalNotFoundException extends Exception
{
    public function render()
    {
        return response()->view('errors/professional-not-found', [], 400);
    }
}
