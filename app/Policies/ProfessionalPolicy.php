<?php

namespace App\Policies;

use App\Client;
use App\Person;
use App\Professional;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfessionalPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Client  $client
     * @return mixed
     */
    public function viewAny(Client $client)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Professional  $professional
     * @return mixed
     */
    public function view(Person $person, Professional $professional)
    {
        return $person->id === $professional->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Client  $client
     * @return mixed
     */
    public function create(?Professional $professional)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Professional  $professional
     * @return mixed
     */
    public function update(Person $person, Professional $professional)
    {
        return $person->id === $professional->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Professional  $professional
     * @return mixed
     */
    public function delete(Client $client, Professional $professional)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Professional  $professional
     * @return mixed
     */
    public function restore(Client $client, Professional $professional)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Professional  $professional
     * @return mixed
     */
    public function forceDelete(Client $client, Professional $professional)
    {
        //
    }
}
