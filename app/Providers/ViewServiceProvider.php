<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class ViewServiceProvider  extends ServiceProvider
{
    public function boot(): void
    {
        // View::share('locale',    App::currentLocale());
    }
}
