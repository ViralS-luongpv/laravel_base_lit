<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('role_has_permissions')->truncate();

        $permissions = \Spatie\Permission\Models\Permission::all();

        \Spatie\Permission\Models\Role::all()->each(function(\Spatie\Permission\Models\Role $role) use ($permissions) {
            $role->syncPermissions($permissions);
        });

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
