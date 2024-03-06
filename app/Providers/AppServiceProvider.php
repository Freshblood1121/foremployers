<?php

namespace App\Providers;

use App\Http\QueryBuilders\CandidateQueryBuilder;
use App\Http\QueryBuilders\QueryBuilder;
use App\Services\CandidateService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(QueryBuilder::class, CandidateQueryBuilder::class);
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
