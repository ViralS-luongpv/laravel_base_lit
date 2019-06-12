<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('roles')->truncate();

        $data = collect(BASE_ROLES)->map(function($role) {
            return [
                'name'          => $role,
                'guard_name'    => GUARD_DEFAULT,
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ];
        })->toArray();

        \DB::table('roles')->insert($data);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
