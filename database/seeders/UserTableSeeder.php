<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //create superadmin user
        $user = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@email.com',
            'password' => bcrypt('secret'),
        ]);

        //get all permissions
        $permissions = Permission::all();

        // get role superadmin
        $role = Role::find(1);

        //assign all permissions to role superadmin
        $role->syncPermissions($permissions);

        //assign role superadmin to user
        $user->assignRole($role);
    }
}
