<?php

namespace App\Policies;

use App\Advertisement;
use App\Client;
use App\Professional;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvertisementPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function view(Client $client, Advertisement $advertisement)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Client  $client
     * @return mixed
     */
    public function create(Person $person)
    {

        return $person instanceof Professional;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Advertisement  $advertisement
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
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function delete(Client $client, Advertisement $advertisement)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function restore(Client $client, Advertisement $advertisement)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Client  $client
     * @param  \App\Advertisement  $advertisement
     * @return mixed
     */
    public function forceDelete(Client $client, Advertisement $advertisement)
    {
        //
    }
}
