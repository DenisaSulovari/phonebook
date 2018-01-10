<?php

namespace Dena\Phonebook;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class PhonebookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        require __DIR__.'/routes/routes.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Dena\Phonebook\ContactsController');
        $this->app->make('Dena\Phonebook\ContactsModel');
        $this->app->make('Dena\Phonebook\PagesController');
        $this->loadViewsFrom(__DIR__.'/views', 'phonebook');
        $this->loadMigrationsFrom(__DIR__.'/migrations', 'phonebook');

    }
}
