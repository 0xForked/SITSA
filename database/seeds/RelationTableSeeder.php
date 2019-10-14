<?php

use App\Models\User;
use Illuminate\Database\Seeder;
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
            'name' => 'Agus Adhi Sumitro',
            'phone' => '+6282271115593',
            'email' => 'aasumitro@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        ];

        $admin = User::create($admin_user);
        $admin->assignRole($admin_id);

    }
}
