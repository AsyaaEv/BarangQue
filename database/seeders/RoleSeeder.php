<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleAdmin = Role::updateOrCreate(['name' => 'admin',], ['name' => 'admin']);
        $roleUser = Role::updateOrCreate(['name' => 'user',], ['name' => 'user']);

        $permissionAdmin = Permission::updateOrCreate(['name' => 'view_dashboard',], ['name' => 'view_dashboard'] );
        $permissionUser = Permission::updateOrCreate(['name' => 'view_profile',], ['name' => 'view_profile'] );


        $roleAdmin->givePermissionTo($permissionAdmin);
        $roleAdmin->givePermissionTo($permissionUser);
        $roleUser->givePermissionTo($permissionUser);

    }
}
