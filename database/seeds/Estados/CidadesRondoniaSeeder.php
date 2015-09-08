<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesRondoniaSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Alta Floresta d`Oeste', 'estado_id' => 22],
            ['cidade' => 'Alto Alegre dos Parecis', 'estado_id' => 22],
            ['cidade' => 'Alto Paraíso', 'estado_id' => 22],
            ['cidade' => 'Alvorada d`Oeste', 'estado_id' => 22],
            ['cidade' => 'Ariquemes', 'estado_id' => 22],
            ['cidade' => 'Buritis', 'estado_id' => 22],
            ['cidade' => 'Cabixi', 'estado_id' => 22],
            ['cidade' => 'Cacaulândia', 'estado_id' => 22],
            ['cidade' => 'Cacoal', 'estado_id' => 22],
            ['cidade' => 'Campo Novo de Rondônia', 'estado_id' => 22],
            ['cidade' => 'Candeias do Jamari', 'estado_id' => 22],
            ['cidade' => 'Castanheiras', 'estado_id' => 22],
            ['cidade' => 'Cerejeiras', 'estado_id' => 22],
            ['cidade' => 'Chupinguaia', 'estado_id' => 22],
            ['cidade' => 'Colorado do Oeste', 'estado_id' => 22],
            ['cidade' => 'Corumbiara', 'estado_id' => 22],
            ['cidade' => 'Costa Marques', 'estado_id' => 22],
            ['cidade' => 'Cujubim', 'estado_id' => 22],
            ['cidade' => 'Espigão d`Oeste', 'estado_id' => 22],
            ['cidade' => 'Governador Jorge Teixeira', 'estado_id' => 22],
            ['cidade' => 'Guajará-Mirim', 'estado_id' => 22],
            ['cidade' => 'Itapuã do Oeste', 'estado_id' => 22],
            ['cidade' => 'Jaru', 'estado_id' => 22],
            ['cidade' => 'Ji-Paraná', 'estado_id' => 22],
            ['cidade' => 'Machadinho d`Oeste', 'estado_id' => 22],
            ['cidade' => 'Ministro Andreazza', 'estado_id' => 22],
            ['cidade' => 'Mirante da Serra', 'estado_id' => 22],
            ['cidade' => 'Monte Negro', 'estado_id' => 22],
            ['cidade' => 'Nova Brasilândia d`Oeste', 'estado_id' => 22],
            ['cidade' => 'Nova Mamoré', 'estado_id' => 22],
            ['cidade' => 'Nova União', 'estado_id' => 22],
            ['cidade' => 'Novo Horizonte do Oeste', 'estado_id' => 22],
            ['cidade' => 'Ouro Preto do Oeste', 'estado_id' => 22],
            ['cidade' => 'Parecis', 'estado_id' => 22],
            ['cidade' => 'Pimenta Bueno', 'estado_id' => 22],
            ['cidade' => 'Pimenteiras do Oeste', 'estado_id' => 22],
            ['cidade' => 'Porto Velho', 'estado_id' => 22],
            ['cidade' => 'Presidente Médici', 'estado_id' => 22],
            ['cidade' => 'Primavera de Rondônia', 'estado_id' => 22],
            ['cidade' => 'Rio Crespo', 'estado_id' => 22],
            ['cidade' => 'Rolim de Moura', 'estado_id' => 22],
            ['cidade' => 'Santa Luzia d`Oeste', 'estado_id' => 22],
            ['cidade' => 'São Felipe d`Oeste', 'estado_id' => 22],
            ['cidade' => 'São Francisco do Guaporé', 'estado_id' => 22],
            ['cidade' => 'São Miguel do Guaporé', 'estado_id' => 22],
            ['cidade' => 'Seringueiras', 'estado_id' => 22],
            ['cidade' => 'Teixeirópolis', 'estado_id' => 22],
            ['cidade' => 'Theobroma', 'estado_id' => 22],
            ['cidade' => 'Urupá', 'estado_id' => 22],
            ['cidade' => 'Vale do Anari', 'estado_id' => 22],
            ['cidade' => 'Vale do Paraíso', 'estado_id' => 22],
            ['cidade' => 'Vilhena', 'estado_id' => 22]
        ]);

        $this->command->info('Cidades de Rondônia importadas com sucesso!');
    }
}