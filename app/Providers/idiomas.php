<?php
namespace App\Providers;
use App\idioma; // write model name here 
use Illuminate\Support\ServiceProvider;
class idiomas extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('idiomaArray', idioma::all());
        });
    }
 
}
