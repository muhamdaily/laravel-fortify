<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;

use App\Models\Mailsetting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $mailsetting = Mailsetting::first();
        if ($mailsetting) {
            $data = [
                'driver'        => $mailsetting->mail_transport,
                'host'          => $mailsetting->mail_host,
                'port'          => $mailsetting->mail_port,
                'encryption'    => $mailsetting->mail_encryption,
                'username'      => $mailsetting->mail_username,
                'password'      => $mailsetting->mail_password,
                'from'          => [
                    'address'   => $mailsetting->mail_address,
                    'name'      => $mailsetting->mail_name
                ]
            ];
            Config::set('mail', $data);
        }
    }
}
