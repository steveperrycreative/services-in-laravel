<?php

namespace App\Providers;

use App\Services\PingPing\Client;
use Illuminate\Support\ServiceProvider;

class PingPingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Client::class, function($app) {
            return new Client(
                uri: config('services.ping-ping.uri'),
                token: config('services.ping-ping.token'),
                timeout: config('services.ping-ping.timeout'),
                retryTimes: config('services.ping-ping.retry_times'),
                retryMilliseconds: config('services.ping-ping.retry_milliseconds'),
            );
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
