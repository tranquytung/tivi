<?php

namespace App\Providers;

use App\Category;
use App\Dophangiai;
use App\Hang;
use App\Ktmh;
use App\Loaitivi;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(150);

        $data['categoris']=Category::all();
        view()->share($data);

        $logohang['hang']=Hang::all();
        view()->share($logohang);

        $ktmh['ktmh']=Ktmh::all();
        view()->share($ktmh);

        $loaitivi['loaitivi']=Loaitivi::all();
        view()->share($loaitivi);

        $dophangiai['dophangiai']=Dophangiai::all();
        view()->share($dophangiai);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
