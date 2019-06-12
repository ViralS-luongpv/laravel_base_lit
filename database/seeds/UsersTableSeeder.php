<?php

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        \DB::table('users')->truncate();

        \App\Models\BackpackUser::create([
            'email'     => 'viralsoft@vs.com',
            'name'      => 'admin',
            'password'  => bcrypt('123@123a'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ]);

        \DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
