<?php

namespace App\Providers;

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

        /******************************************
         * ここにuserの権限設定を記載
         **/

        //管理者
        Gate::define('admin', function ($user) {
            return ($user->role == 1);
        });

        //一般ユーザ
        Gate::define('user', function ($user) {
            return ($user->role >= 2);
        });


        /**
         * ここまで 
         ******************************************/
    }
}
