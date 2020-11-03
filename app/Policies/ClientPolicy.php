<?php

namespace App\Policies;

use App\Client;
use App\Person;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class ClientPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Client $client
     * @return mixed
     */
    public function viewAny(Client $client)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Client $client
     * @param \App\Client $client
     * @return mixed
     */
    public function view(Person $person, Client $client)
    {
        if (!($person instanceof Client)) {
            return false;
        }

        return $person->id === $client->id;
    }

    public function dashboard(Person $person, Client $client)
    {
        return $person->id === $client->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Client $client
     * @return mixed
     */
    public function create(Client $client)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param Person $person
     * @param \App\Client $client
     * @return mixed
     */
    public function update(Person $person, Client $client)
    {
        return $person->id === $client->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Client $client
     * @param \App\Client $client
     * @return mixed
     */
    public function delete(Client $client)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Client $client
     * @param \App\Client $client
     * @return mixed
     */
    public function restore(Client $client)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Client $client
     * @param \App\Client $client
     * @return mixed
     */
    public function forceDelete(Client $client)
    {
        return false;
    }
}
