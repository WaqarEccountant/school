<?php

namespace App\Providers;

use App\Models\ExamType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register () {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot () {
        View::composer('student.layouts.header', function ($view) {
            return $view->with(['_types' => ExamType::getAll()]);
        });
    }


}
