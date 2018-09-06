<?php

namespace Modules\Colaboradores\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

class ColaboradorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        #Rotas (web)
        Route::namespace('Modules\Colaboradores\Http\Controllers')
            ->group(__DIR__. '/../Routes/web.php');

        #Views
        $this->loadViewsFrom(__DIR__.'/../Views', 'Colaboradores');
    }
}