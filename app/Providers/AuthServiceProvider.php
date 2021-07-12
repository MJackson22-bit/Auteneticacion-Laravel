<?php

namespace App\Providers;

use App\Models\Aula;
use App\Policies\AulaPolicy;
use Illuminate\Auth\Access\Gate as AccessGate;
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
        //'App\Models\Aula' => 'App\Policies\AulaPolicy'
        User::class => AulaPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-profesor', function ($user){
            if($user->roles->role == "rol 1"){
                return true;
            }
            return false;
        });
    }
}
