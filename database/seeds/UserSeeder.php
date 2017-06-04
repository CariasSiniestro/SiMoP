<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role'  => '1',
            'departamento_id' => '5'           
        ]);*/
        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@admin2.com',
            'password' => bcrypt('admin2'),
            'role'  => '2',
            'departamento_id' => '5'           
        ]);
    }
}
