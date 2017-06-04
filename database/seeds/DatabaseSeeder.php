<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         Si se usa un seeder para poblar una tabla que tiene llaves foraneas
         tener cuidado con los id de las tablas referencias, al ser autoincrement
         siempre dan clavos pues los id foraneos deberan conicidir exactamente
        */
      	//$this->call(DepartamentosSeeder::class);
    	//$this->call(UserSeeder::class);
        //$this->call(CategoriaSeeder::class);
        //$this->call(UnidadMedidaSeeder::class);
    }

}
