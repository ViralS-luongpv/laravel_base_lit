<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('permissions')->truncate();

        collect(BASE_PERMISSIONS)->each(function($item, $key) {
            $data = collect($item)->map(function($action) use ($key) {
                return [
                    'name'          => $action . " " . $key,
                    'guard_name'    => GUARD_DEFAULT,
                    'created_at'    => Carbon::now(),
                    'updated_at'    => Carbon::now()
                ];
            })->toArray();

            \DB::table('permissions')->insert($data);
        });

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
