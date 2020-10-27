<?php

namespace App\Policies;

use App\Advertisement;
use App\Client;
use App\Person;
use App\Service;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
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
     * @param  \App\Service  $service
     * @return mixed
     */
    public function view(Client $client, Service $service)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param Person $person
     * @param Advertisement $advertisement
     * @return mixed
     */
    public function create(Person $person, Advertisement $advertisement): bool
    {
        return $person->id !== $advertisement->professional->id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Service  $service
     * @return mixed
     */
    public function update(Client $client, Service $service)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Service  $service
     * @return mixed
     */
    public function delete(Client $client, Service $service)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Service  $service
     * @return mixed
     */
    public function restore(Client $client, Service $service)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Service  $service
     * @return mixed
     */
    public function forceDelete(Client $client, Service $service)
    {
        //
    }
}
