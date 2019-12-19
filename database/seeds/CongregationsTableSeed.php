<?php

use App\Models\Profile\ServicePeriod;
use Illuminate\Database\Seeder;

class CongregationsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     [
        //         'key' => 'site_title',
        //         'value' => 'SITSA'
        //     ],
        // ];

        // foreach ($data as $setting) {
        //     Setting::create($setting);
        // }

        $periods = [
            [
                'from' => 2014,
                'to' => 2018
            ],
            [
                'from' => 2018,
                'to' => 2022,
                'status' => 'ACTIVE'
            ],
        ];

        foreach($periods as $period) {
            ServicePeriod::create($period);
        }
    }
}
