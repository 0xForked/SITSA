<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $root_id = 1;
        $root_has_permission = [1,2,3,4,5,6,7,8,9,10,11,12,13];
        $root = Role::findOrFail($root_id);
        $root->syncPermissions($root_has_permission);
        $root_user = [
            'name' => 'Super Admin',
            'username' => 'super_admin',
            'phone' => '+6282270001111',
            'email' => 'super-admin@sitsa.id',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'ACTIVE'
        ];
        $root = User::create($root_user);
        $root->assignRole($root_id);

        $admin_id = 2;
        $admin_user = [
            'name' => 'Admin',
            'username' => 'admin',
            'phone' => '+6282270002222',
            'email' => 'admin@sitsa.id',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'ACTIVE'
        ];
        $admin = User::create($admin_user);
        $admin->assignRole($admin_id);

        $staff_id = 3;
        $staff_user = [
            'name' => 'Staff',
            'username' => 'staff',
            'phone' => '+6282270003333',
            'email' => 'staff@sitsa.id',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'ACTIVE'
        ];
        $staff = User::create($staff_user);
        $staff->assignRole($staff_id);
    }
}
