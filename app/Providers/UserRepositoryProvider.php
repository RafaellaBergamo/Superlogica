<?php 

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UserRepositoryProvider extends ServiceProvider {

    public function boot() {}

    public function register() {
        $models = array(
            'User',
        );

        foreach ($models as $model) {
            $this->app->bind("App\Repositories\Contracts\\{$model}RepositoryInterface", "App\Repositories\\{$model}Repository");
        }
    }
}