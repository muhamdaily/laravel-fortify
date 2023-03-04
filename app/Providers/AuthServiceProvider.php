<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    public static $permission = [
        'dashboard' => ['admin', 'user'],
    ];

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Setup agar user yang memiliki peran superadmin bisa akses semua fitur pada website
        Gate::before(function (User $user) {
            if ($user->role == 'superadmin') {
                return true;
            }
        });

        // Mendefinisikan Gate untuk setiap aksi yang diizinkan dengan peran tertentu
        foreach (self::$permission as $aksi => $roles) {
            Gate::define($aksi, function (User $user) use ($roles) {
                // Cek apakah peran pengguna termasuk dalam daftar peran yang diizinkan untuk aksi tersebut
                if (in_array($user->role, $roles)) {
                    // Jika peran terdaftar pada aksi, maka user akan di izinkan untuk mengaksesnya.
                    return true;
                }
            });
        }
    }
}
