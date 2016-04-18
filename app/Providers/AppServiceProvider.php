<?php

namespace App\Providers;

use App;
use URL;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $url = URL::full();
        $en = (strpos($url,'en') === false && strpos($url,'id') === false) ? $url.'/en':(strpos($url,'en') ===false)? str_replace('id','en',$url) : $url;
        $id = (strpos($url,'id') === false && strpos($url,'id') === false) ? $url.'/id':(strpos($url,'id') ===false)? str_replace('en','id',$url) : $url;

        $categories = Category::all();
        view()->share('categories', $categories);
        view()->share('locale',App::getLocale());
        view()->share('en', $en);
        view()->share('id', $id);
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
