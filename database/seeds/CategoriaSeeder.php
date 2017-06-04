<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categorias')->insert([
        	'name' => 'Granos básicos'
        ]);
        DB::table('categorias')->insert([
        	'name' => 'Verduras'
        ]);
        DB::table('categorias')->insert([
        	'name' => 'Pecuarios'
        ]);
    }
}
