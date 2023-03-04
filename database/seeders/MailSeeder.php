<?php

namespace Database\Seeders;

use App\Models\Mailsetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mailsetting::create([
            'mail_transport'      => 'smtp',
            'mail_host'           => 'smtp.mailtrap.io',
            'mail_port'           => '2525',
            'mail_username'       => 'ef05a34523215e',
            'mail_password'       => '2358e54ec4585e',
            'mail_encryption'     => 'tls',
            'mail_address'        => 'info@web.anteiku.tech',
            'mail_name'           => 'My Laravel',
        ]);
    }
}
