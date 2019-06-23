<?php
namespace App\Providers;
use App\servicio; // write model name here 
use Illuminate\Support\ServiceProvider;
class servicios extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('servicioArray', servicio::all());
        });
    }
 
}