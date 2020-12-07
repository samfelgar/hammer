<?php

namespace App\Traits;

use App\Person;
use Illuminate\Support\Str;

trait GenericPersonActions
{
    private function getPersonChildClass(Person $person)
    {
        if (!isset($person->tipo)) {
            throw new \DomainException('Invalid request.');
        }

        if ($person->tipo === Person::CLIENT) {
            return 'client';
        }

        if ($person->tipo === Person::PROFESSIONAL) {
            return 'professional';
        }

        return 'user';
    }

    private function getActionName(Person $person, string $action)
    {
        try {
            $pluralType = Str::plural($this->getPersonChildClass($person));
            return "{$pluralType}.{$this->routeSlug}.{$action}";
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
