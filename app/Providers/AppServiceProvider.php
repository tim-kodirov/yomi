<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Wanted;
use App\Question;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.admin', function($view)
        {         
            $questions_count = Question::where('is_seen', false)->count();
            $view->with('questions_count', $questions_count);
        });

        view()->composer('layouts.main', function($view)
            {
                $wanted = Wanted::where('is_lost', false)->orderBy('id', 'DESC')->get();
                $lost = Wanted::where('is_lost', true)->orderBy('id', 'DESC')->get();

                $view->withWanted($wanted)->withLost($lost);
            });
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
