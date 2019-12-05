<?php

use Illuminate\Database\Seeder;

class AppSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'key' => 'site_title',
                'value' => 'SITSA'
            ],
            [
                'key' => 'site_description',
                'value' => 'Sistem Informasi Terpadu Sensus Anggota'
            ],
            [
                'key' => 'site_logo',
                'value' => 'logo.png'
            ],
            [
                'key' => 'site_favicon',
                'value' => 'favicon.ico'
            ],
            [
                'key' => 'site_address',
                'value' => 'JL. Suka Maju No 1, Manado.'
            ],
            [
                'key' => 'site_phone',
                'value' => '+62 822 1234 5678'
            ],
            [
                'key' => 'site_email',
                'value' => 'admin@sitsa.id'
            ],
            [
                'key' => 'site_facebook_link',
                'value' => 'https://fb.me/sitsa'
            ],
            [
                'key' => 'site_twitter_link',
                'value' => 'twitter.com/sitsa'
            ],
            [
                'key' => 'site_instagram_link',
                'value' => 'instagram.com/sitsa'
            ],
            [
                'key' => 'site_address_coordinate',
                'value' => [1.1111, 124.1111]
            ],
            [
                'key' => 'site_db_last_backup',
                'value' => 'NOT_SET'
            ],
        ];
    }
}