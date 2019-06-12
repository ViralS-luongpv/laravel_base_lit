<?php

use App\Models\BackpackUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ModelHasPermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('model_has_permissions')->truncate();

        BackpackUser::all()->each(function(BackpackUser $user) {
            $user->givePermissionTo(\Spatie\Permission\Models\Permission::all());
        });

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
