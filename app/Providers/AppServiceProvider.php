<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\ApiNews;
use App\CoinsInfo;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $newsApi = new ApiNews;
        $newsquery = urlencode("crypto or bitcoin");
        $data = $newsApi->queryNews($newsquery);
        View::share('news', $data);

        $coinsApi = new CoinsInfo;
        View::share('Coins', $coinsApi);
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
