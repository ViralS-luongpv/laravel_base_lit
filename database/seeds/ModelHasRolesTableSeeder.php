<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\BackpackUser;

class ModelHasRolesTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('model_has_roles')->truncate();

        BackpackUser::all()->each(function(BackpackUser $user) {
            $user->assignRole(BASE_ROLES[0]);
        });

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
