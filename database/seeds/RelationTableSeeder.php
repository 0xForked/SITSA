<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_id = 1;
        $admin_has_permission = [1,2,3,4,5,6,7,8,9,10,11,12,13];
        $admin = Role::findOrFail($admin_id);
        $admin->syncPermissions($admin_has_permission);
        $admin_user = [
            'name' => 'Super Admin',
            'username' => 'admin',
            'phone' => '+6282270001111',
            'email' => 'admin@sitgmim.id',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'ACTIVE'
        ];
        $admin = User::create($admin_user);
        $admin->assignRole($admin_id);
    }
}
