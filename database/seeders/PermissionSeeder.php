<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view user management']);
        Permission::create(['name' => 'view client master data']);
        Permission::create(['name' => 'view project master data']);
        Permission::create(['name' => 'view user management']);

        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'delete user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'update user']);

        Permission::create(['name' => 'view permision']);
        Permission::create(['name' => 'attach permision']);
        Permission::create(['name' => 'revoke permision']);

        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'view role']);
        Permission::create(['name' => 'delete roles']);
        Permission::create(['name' => 'delete role']);
        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'update role']);

        Permission::create(['name' => 'view clients']);
        Permission::create(['name' => 'view client']);
        Permission::create(['name' => 'delete clients']);
        Permission::create(['name' => 'delete client']);
        Permission::create(['name' => 'create client']);
        Permission::create(['name' => 'update client']);
        Permission::create(['name' => 'attach client user']);
        Permission::create(['name' => 'detach client user']);

        Permission::create(['name' => 'view users total']);
        Permission::create(['name' => 'view clients total']);
        Permission::create(['name' => 'view projects total']);

        $role = Role::create(['name' => 'System User']);
        $role = Role::create(['name' => 'Client User']);

        $role->givePermissionTo('view users total');
        $role->givePermissionTo('view projects total');

        $role = Role::create(['name' => 'Super-Admin']);

    }
}
