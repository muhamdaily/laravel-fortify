<p align="center">
  <a href="https://getstisla.com">
    <img src="https://raw.githubusercontent.com/muhammedia/laravel-fortify/main/icon.png" alt="Icon" width="75" height="75">
  </a>
</p>

<h1 align="center">Laravel Fortify Starter Kit</h1>

<span align="center">

[Laravel Fortify](https://laravel.com/docs/10.x/fortify#what-is-fortify) adalah implementasi backend otentikasi agnostik frontend untuk Laravel. Fortify mendaftarkan rute dan pengontrol yang diperlukan untuk mengimplementasikan semua fitur autentikasi Laravel, termasuk login, registrasi, reset kata sandi, verifikasi email, dan banyak lagi.

[![](https://img.shields.io/badge/OS-Windows-blue)](LICENSE)
[![](https://img.shields.io/badge/Berikan-Dukungan-yellow)](https://trakteer.id/anteikudevs?quantity=1)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
[![GitHub stars](https://img.shields.io/github/stars/muhammedia/laravel-fortify.svg?style=social&label=Star&maxAge=2592000)](https://github.com/muhammedia/laravel-fortify/stargazers/)

</span>

[![Laravel Fortify Preview](https://raw.githubusercontent.com/muhammedia/laravel-fortify/main/default.png)](https://github.com/muhammedia/laravel-fortify)

<br>

## Requirements

* PHP `^8.1`
* Composer
* Git Bash

## Installation
- Clone repo: `git clone https://github.com/muhammedia/laravel-fortify.git`
- Run `cd laravel fortify`
- Update dependencies `composer update`
- Done

## Configuration
- Copy file `.env.example` to `.env`
- Isi semua kode seperti contoh dibawah ini :
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE_NAME
DB_USERNAME=YOUR_USER_NAME
DB_PASSWORD=YOUR_PASSWORD
```
dan isi baris kode dibawah ini untuk konfigurasi email. Sebagai contoh saya menggunakan bantuan dari [MailTrap](https://mailtrap.io/)
```bash
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```
- Setelah mengisi semua file `.env` jalankan perintah ini
```bash
$ php artisan generate:key
```
- Jalankan perintah
```bash
$ php artisan migrate
```
jika kamu belum mempunyai database, akan muncul pertanyaan seperti berikut ini
```bash
WARN  The database 'db_pas_kelompok9' does not exist
on the 'mysql' connection.  

  Would you like to create it? (yes/no) [no]
❯ 
```
ketik `yes` dan enter.
- Dan terakhir jalankan perintah
```bash
$ php artisan migrate:fresh --seed
```
Perintah diatas ini bertujuan untuk membuatkan akun dari role `superadmin`, `admin` dan `user`
- Done

### Login Information
- Superadmin
```bash
email : superadmin@gmail.com
password : superadmin
```
- Admin
```bash
email : admin@gmail.com
password : admin
```
- User
```bash
email : user@gmail.com
password : user
```

## Disclaimer
Aplikasi ini masih dalam tahap pengembangan! Jika anda berminat untuk ikut serta mengembangkan projek **Laravel Fortify** silahkan <a href="mailto:muhampedia.id@gmail.com">hubungi kami</a>.

## Support
Terima kasih atas dukungan yang sudah anda berikan.

<a href="https://trakteer.id/anteikudevs?quantity=1">
            <img src="https://raw.githubusercontent.com/muhammedia/binasehat/main/image/team/muham.png"
                alt="Muhammad Maghribi" width="75" height="75">
</a>

## License

**Laravel Fortify** dilisensikan di bawah [MIT License](LICENSE)
