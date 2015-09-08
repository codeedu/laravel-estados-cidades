<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesDistritoFederalSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Brasília', 'estado_id' => 7]
        ]);

        $this->command->info('Cidades do Distrito Federal importadas com sucesso!');
    }
}