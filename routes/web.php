<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SiteController;
use App\Models\Site;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $site = Site::first();
    return view('auth.login', compact('site'));
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('home', function () {
        $site = Site::first();
        return view('admin.index', compact('site'));
    })->name('home')->middleware('can:dashboard');

    Route::get('akun', function () {
        $site = Site::first();
        return view('admin.profile', compact('site'));
    })->name('akun');

    Route::get('pengaturan-akun', function () {
        $site = Site::first();
        return view('admin.settings', compact('site'));
    })->name('pengaturan.akun');

    Route::resource('pengguna', UserController::class);
    Route::resource('mail', MailController::class);
    Route::resource('umum', SiteController::class);
    Route::get('pengaturan', [SettingController::class, 'index'])->name('pengaturan');

    Route::get('mail-test', function () {
        Mail::raw('Konfirgurasi Mail Berhasil', function ($message) {
            $message->to('muhampedia.id@gmail.com')
                ->subject('Konfigurasi Alamat Email');
        });

        return to_route('mail.index')->withToastSuccess('Berhasil mengirim email konfigurasi');
    })->name('mail.test');

    Route::post('umum/upload-image', [SiteController::class, 'uploadImage'])->name('umum.upload-image');

    Route::post('pengguna', [UserController::class, 'uploadImage'])->name('pengguna.image');
});
