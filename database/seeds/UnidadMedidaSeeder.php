<?php

use Illuminate\Database\Seeder;

class UnidadMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unidad_medida')->insert([
        	'name' => 'Libra'
       	]);
        DB::table('unidad_medida')->insert([
        	'name' => 'Quintal'
       	]);
        DB::table('unidad_medida')->insert([
        	'name' => 'Botella'
       	]);
        DB::table('unidad_medida')->insert([
        	'name' => 'Mano'
       	]);
    }
}
