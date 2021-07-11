<?php

namespace App\Providers;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
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
            /*foreach ($user->roles as $role){
                if($role->role.equal("rol 1")){
                    return true;
                }
            }*/
            if($user->roles->role == "rol 1"){
                return true;
            }
            return false;
        });
    }
}
