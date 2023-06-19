<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('accessAdministration', function (User $user){
            // Amateur method
            //  if ($user->role->name === 'Admin'){
            //      return true;
            //  } else {
            //       return false;
            //  }

            // professional method
            return $user->role->name === 'Admin';
        });
    }
}
