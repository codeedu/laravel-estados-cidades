<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesAcreSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
            ['cidade' => 'Acrelândia', 'estado_id' => 1],
            ['cidade' => 'Assis Brasil', 'estado_id' => 1],
            ['cidade' => 'Brasiléia', 'estado_id' => 1],
            ['cidade' => 'Bujari', 'estado_id' => 1],
            ['cidade' => 'Capixaba', 'estado_id' => 1],
            ['cidade' => 'Cruzeiro do Sul', 'estado_id' => 1],
            ['cidade' => 'Epitaciolândia', 'estado_id' => 1],
            ['cidade' => 'Feijó', 'estado_id' => 1],
            ['cidade' => 'Jordão', 'estado_id' => 1],
            ['cidade' => 'Mâncio Lima', 'estado_id' => 1],
            ['cidade' => 'Manoel Urbano', 'estado_id' => 1],
            ['cidade' => 'Marechal Thaumaturgo', 'estado_id' => 1],
            ['cidade' => 'Plácido de Castro', 'estado_id' => 1],
            ['cidade' => 'Porto Acre', 'estado_id' => 1],
            ['cidade' => 'Porto Walter', 'estado_id' => 1],
            ['cidade' => 'Rio Branco', 'estado_id' => 1],
            ['cidade' => 'Rodrigues Alves', 'estado_id' => 1],
            ['cidade' => 'Santa Rosa do Purus', 'estado_id' => 1],
            ['cidade' => 'Sena Madureira', 'estado_id' => 1],
            ['cidade' => 'Senador Guiomard', 'estado_id' => 1],
            ['cidade' => 'Tarauacá', 'estado_id' => 1],
            ['cidade' => 'Xapuri', 'estado_id' => 1]
        ]);

        $this->command->info('Cidades do Acre importadas com sucesso!');
    }
}