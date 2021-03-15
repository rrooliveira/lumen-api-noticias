<?php

namespace App\Providers;

use App\Domain\News\Repository\NewsRepository;
use App\Repositories\RepositoryInterface;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class,  NewsRepository::class);
    }
}
