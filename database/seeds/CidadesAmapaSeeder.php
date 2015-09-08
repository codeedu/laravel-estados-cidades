<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesAmapaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Amapá', 'estado_id' => 3],
			['cidade' => 'Calçoene', 'estado_id' => 3],
			['cidade' => 'Cutias', 'estado_id' => 3],
			['cidade' => 'Ferreira Gomes', 'estado_id' => 3],
			['cidade' => 'Itaubal', 'estado_id' => 3],
			['cidade' => 'Laranjal do Jari', 'estado_id' => 3],
			['cidade' => 'Macapá', 'estado_id' => 3],
			['cidade' => 'Mazagão', 'estado_id' => 3],
			['cidade' => 'Oiapoque', 'estado_id' => 3],
			['cidade' => 'Pedra Branca do Amaparí', 'estado_id' => 3],
			['cidade' => 'Porto Grande', 'estado_id' => 3],
			['cidade' => 'Pracuúba', 'estado_id' => 3],
			['cidade' => 'Santana', 'estado_id' => 3],
			['cidade' => 'Serra do Navio', 'estado_id' => 3],
			['cidade' => 'Tartarugalzinho', 'estado_id' => 3],
			['cidade' => 'Vitória do Jari', 'estado_id' => 3]
        ]);

        $this->command->info('Cidades do Amapá importadas com sucesso!');
    }
}