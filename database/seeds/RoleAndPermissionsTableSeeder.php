<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // Reset cached roles and permissions
          app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

          // create permissions
          Permission::create(['name' => 'edit articles']);
          Permission::create(['name' => 'delete articles']);
          Permission::create(['name' => 'publish articles']);
          Permission::create(['name' => 'unpublish articles']);

        // create permissions
        Permission::create(['name' => 'edit kategories']);
        Permission::create(['name' => 'delete kategories']);
        Permission::create(['name' => 'publish kategories']);
        Permission::create(['name' => 'unpublish kategories']);

        // create permissions
        Permission::create(['name' => 'edit subscribe']);
        Permission::create(['name' => 'delete subscribe']);



        // create permissions
        Permission::create(['name' => 'edit message']);
        Permission::create(['name' => 'delete message']);



          // create roles and assign created permissions

          // this can be done as separate statements
          $role = Role::create(['name' => 'writer']);
          $role->givePermissionTo('edit articles');

          // or may be done by chaining
          $role = Role::create(['name' => 'moderator'])
              ->givePermissionTo(['publish articles', 'unpublish articles']);

          $role = Role::create(['name' => 'super-admin']);
          $role->givePermissionTo(Permission::all());
    }
}
