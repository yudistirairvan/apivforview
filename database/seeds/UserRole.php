<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserRole extends Seeder
{
    public function run()
    {
          // Reset cached roles and permissions
          app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

          // create permissions
          Permission::create(['name' => 'edit link']);
          Permission::create(['name' => 'delete link']);
          Permission::create(['name' => 'input link']);
          Permission::create(['name' => 'lihat link']);
          

        // create permissions
        Permission::create(['name' => 'lihat log']);
        Permission::create(['name' => 'input log']);

        Permission::create(['name' => 'lihat profile']);
        Permission::create(['name' => 'edit profile']);
        Permission::create(['name' => 'hapus profile']);
        Permission::create(['name' => 'input profile']);

        



          // create roles and assign created permissions

          // this can be done as separate statements
          $role = Role::create(['name' => 'user']);
          $role->givePermissionTo('edit link');
          $role->givePermissionTo('delete link');
          $role->givePermissionTo('input link');
          $role->givePermissionTo('lihat link');
          $role->givePermissionTo('lihat log');
          $role->givePermissionTo('input log');
          $role->givePermissionTo('lihat profile');
          $role->givePermissionTo('edit profile');
          $role->givePermissionTo('hapus profile');
          $role->givePermissionTo('input profile');


    }
}
