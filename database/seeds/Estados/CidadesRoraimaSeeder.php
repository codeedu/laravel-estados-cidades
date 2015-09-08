<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesRoraimaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Alto Alegre', 'estado_id' => 23],
            ['cidade' => 'Amajari', 'estado_id' => 23],
            ['cidade' => 'Boa Vista', 'estado_id' => 23],
            ['cidade' => 'Bonfim', 'estado_id' => 23],
            ['cidade' => 'Cantá', 'estado_id' => 23],
            ['cidade' => 'Caracaraí', 'estado_id' => 23],
            ['cidade' => 'Caroebe', 'estado_id' => 23],
            ['cidade' => 'Iracema', 'estado_id' => 23],
            ['cidade' => 'Mucajaí', 'estado_id' => 23],
            ['cidade' => 'Normandia', 'estado_id' => 23],
            ['cidade' => 'Pacaraima', 'estado_id' => 23],
            ['cidade' => 'Rorainópolis', 'estado_id' => 23],
            ['cidade' => 'São João da Baliza', 'estado_id' => 23],
            ['cidade' => 'São Luiz', 'estado_id' => 23],
            ['cidade' => 'Uiramutã', 'estado_id' => 23]
        ]);

        $this->command->info('Cidades de Roraima importadas com sucesso!');
    }
}