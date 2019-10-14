<?php

use App\Models\Scope;
use App\Models\Office;
use App\Models\Position;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class OfficeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $offices = [
            [
                'code' => 'diskominfo',
                'name' => 'Dinas Komunikasi & Informatika'
            ],
        ];

        $scopes = [
            [
                'code' => 'SEKERTARIAT',
                'name' => 'Test sekeratariat'
            ],
            [
                'code' => 'BIDAPTIKA',
                'name' => 'Bidang Aplikasi dan Informatika'
            ],
            [
                'code' => 'BIDIKP',
                'name' => 'Bidang Informasi dan Komunikasi Publik'
            ],
            [
                'code' => 'BIDSANDI',
                'name' => 'Bidang Persandian'
            ],
            [
                'code' => 'BIDSTAT',
                'name' => 'Bidang Statistik'
            ],
        ];

        $positions = [
            [
                'code' => 'KADIS',
                'name' => 'Kepala Dinas'
            ],
            [
                'code' => 'SEKDIS',
                'name' => 'Sekretaris Dinas'
            ],
            [
                'code' => 'KABID',
                'name' => 'Kepala Bidang'
            ],
            [
                'code' => 'KASI',
                'name' => 'Kepala Seksi'
            ],
            [
                'code' => 'KASUBAG',
                'name' => 'Kepala Sub Bagian'
            ],
        ];

        foreach ($offices as $office) {
            Office::create($office);
        }

        foreach ($scopes as $scope) {
            Scope::create($scope);
        }

        foreach ($positions as $position) {
            Position::create($position);
        }
    }
}
