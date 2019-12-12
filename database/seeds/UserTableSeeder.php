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
            'username' => 'admin',
            'phone' => '+6282270001111',
            'email' => 'super-admin@gmim.co.id',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'status' => 'ACTIVE'
        ];
        $root = User::create($root_user);
        $root->assignRole($root_id);
    }
}
