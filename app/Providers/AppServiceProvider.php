<?php

namespace App\Providers;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // QueryBuilder::macro(
        //     'whereNotEmpty',
        //     function (string $column) {
        //         return $this->whereNotNull($column)
        //             ->where($column, '<>', '');
        //     }
        // );

        // EloquentBuilder::macro(
        //     'whereNotEmpty',
        //     function (string $column) {
        //         return $this->getQuery()
        //             ->whereNotEmpty($column);
        //     }
        // );
    }
}
