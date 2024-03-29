<?php

use App\Models\Setting;
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
        $data = [
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
                'value' => 'favicon.png'
            ],
            [
                'key' => 'site_address',
                'value' => 'JL. Suka Maju No 1, Manado.'
            ],
            [
                'key' => 'site_phone',
                'value' => '+6282212345678'
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
                'value' => 'https://twitter.com/sitsa'
            ],
            [
                'key' => 'site_instagram_link',
                'value' => 'https://instagram.com/sitsa'
            ],
            [
                'key' => 'site_address_coordinate',
                'value' => json_encode([1.1111, 124.1111])
            ],
            [
                'key' => 'site_analytics_id',
                'value' => 'NOT_SET'
            ],
            [
                'key' => 'site_db_last_backup',
                'value' => 'NOT_SET'
            ],
        ];

        foreach ($data as $setting) {
            Setting::create($setting);
        }
    }
}
