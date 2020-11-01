<?php

namespace App\Providers;

use App\Advertisement;
use App\Client;
use App\Policies\AdvertisementPolicy;
use App\Policies\ClientPolicy;
use App\Policies\ProfessionalPolicy;
use App\Policies\ServicePolicy;
use App\Professional;
use App\Service;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Service::class => ServicePolicy::class,
        Client::class => ClientPolicy::class,
        Professional::class => ProfessionalPolicy::class,
        Advertisement::class => AdvertisementPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
