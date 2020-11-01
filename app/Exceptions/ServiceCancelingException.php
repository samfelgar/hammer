<?php


namespace App\Exceptions;


class ServiceCancelingException extends \Exception
{
    public function render()
    {
        return response()->view('errors/service-canceling', [], 400);
    }
}
