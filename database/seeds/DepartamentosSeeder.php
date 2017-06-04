<?php

use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departamentos')->insert([
            'name' => 'Zacapa'
        ]);
        DB::table('departamentos')->insert([
            'name' => 'Chiquimula'
        ]);
        DB::table('departamentos')->insert([
            'name' => 'Izabal'
        ]); 
        DB::table('departamentos')->insert([
            'name' => 'El Progreso'
        ]);
    }
}
