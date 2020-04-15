<?php

namespace App\Providers;

use App\CardTraders\Interfaces\FrontendRepositoryInterface;
use App\CardTraders\Repositories\FrontendRepository;
use Illuminate\Support\ServiceProvider;
use function foo\func;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(FrontendRepositoryInterface::class,function(){
            return new FrontendRepository();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
