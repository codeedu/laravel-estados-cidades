<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesSergipeSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Amparo de São Francisco', 'estado_id' => 26],
            ['cidade' => 'Aquidabã', 'estado_id' => 26],
            ['cidade' => 'Aracaju', 'estado_id' => 26],
            ['cidade' => 'Arauá', 'estado_id' => 26],
            ['cidade' => 'Areia Branca', 'estado_id' => 26],
            ['cidade' => 'Barra dos Coqueiros', 'estado_id' => 26],
            ['cidade' => 'Boquim', 'estado_id' => 26],
            ['cidade' => 'Brejo Grande', 'estado_id' => 26],
            ['cidade' => 'Campo do Brito', 'estado_id' => 26],
            ['cidade' => 'Canhoba', 'estado_id' => 26],
            ['cidade' => 'Canindé de São Francisco', 'estado_id' => 26],
            ['cidade' => 'Capela', 'estado_id' => 26],
            ['cidade' => 'Carira', 'estado_id' => 26],
            ['cidade' => 'Carmópolis', 'estado_id' => 26],
            ['cidade' => 'Cedro de São João', 'estado_id' => 26],
            ['cidade' => 'Cristinápolis', 'estado_id' => 26],
            ['cidade' => 'Cumbe', 'estado_id' => 26],
            ['cidade' => 'Divina Pastora', 'estado_id' => 26],
            ['cidade' => 'Estância', 'estado_id' => 26],
            ['cidade' => 'Feira Nova', 'estado_id' => 26],
            ['cidade' => 'Frei Paulo', 'estado_id' => 26],
            ['cidade' => 'Gararu', 'estado_id' => 26],
            ['cidade' => 'General Maynard', 'estado_id' => 26],
            ['cidade' => 'Gracho Cardoso', 'estado_id' => 26],
            ['cidade' => 'Ilha das Flores', 'estado_id' => 26],
            ['cidade' => 'Indiaroba', 'estado_id' => 26],
            ['cidade' => 'Itabaiana', 'estado_id' => 26],
            ['cidade' => 'Itabaianinha', 'estado_id' => 26],
            ['cidade' => 'Itabi', 'estado_id' => 26],
            ['cidade' => 'Itaporanga d`Ajuda', 'estado_id' => 26],
            ['cidade' => 'Japaratuba', 'estado_id' => 26],
            ['cidade' => 'Japoatã', 'estado_id' => 26],
            ['cidade' => 'Lagarto', 'estado_id' => 26],
            ['cidade' => 'Laranjeiras', 'estado_id' => 26],
            ['cidade' => 'Macambira', 'estado_id' => 26],
            ['cidade' => 'Malhada dos Bois', 'estado_id' => 26],
            ['cidade' => 'Malhador', 'estado_id' => 26],
            ['cidade' => 'Maruim', 'estado_id' => 26],
            ['cidade' => 'Moita Bonita', 'estado_id' => 26],
            ['cidade' => 'Monte Alegre de Sergipe', 'estado_id' => 26],
            ['cidade' => 'Muribeca', 'estado_id' => 26],
            ['cidade' => 'Neópolis', 'estado_id' => 26],
            ['cidade' => 'Nossa Senhora Aparecida', 'estado_id' => 26],
            ['cidade' => 'Nossa Senhora da Glória', 'estado_id' => 26],
            ['cidade' => 'Nossa Senhora das Dores', 'estado_id' => 26],
            ['cidade' => 'Nossa Senhora de Lourdes', 'estado_id' => 26],
            ['cidade' => 'Nossa Senhora do Socorro', 'estado_id' => 26],
            ['cidade' => 'Pacatuba', 'estado_id' => 26],
            ['cidade' => 'Pedra Mole', 'estado_id' => 26],
            ['cidade' => 'Pedrinhas', 'estado_id' => 26],
            ['cidade' => 'Pinhão', 'estado_id' => 26],
            ['cidade' => 'Pirambu', 'estado_id' => 26],
            ['cidade' => 'Poço Redondo', 'estado_id' => 26],
            ['cidade' => 'Poço Verde', 'estado_id' => 26],
            ['cidade' => 'Porto da Folha', 'estado_id' => 26],
            ['cidade' => 'Propriá', 'estado_id' => 26],
            ['cidade' => 'Riachão do Dantas', 'estado_id' => 26],
            ['cidade' => 'Riachuelo', 'estado_id' => 26],
            ['cidade' => 'Ribeirópolis', 'estado_id' => 26],
            ['cidade' => 'Rosário do Catete', 'estado_id' => 26],
            ['cidade' => 'Salgado', 'estado_id' => 26],
            ['cidade' => 'Santa Luzia do Itanhy', 'estado_id' => 26],
            ['cidade' => 'Santa Rosa de Lima', 'estado_id' => 26],
            ['cidade' => 'Santana do São Francisco', 'estado_id' => 26],
            ['cidade' => 'Santo Amaro das Brotas', 'estado_id' => 26],
            ['cidade' => 'São Cristóvão', 'estado_id' => 26],
            ['cidade' => 'São Domingos', 'estado_id' => 26],
            ['cidade' => 'São Francisco', 'estado_id' => 26],
            ['cidade' => 'São Miguel do Aleixo', 'estado_id' => 26],
            ['cidade' => 'Simão Dias', 'estado_id' => 26],
            ['cidade' => 'Siriri', 'estado_id' => 26],
            ['cidade' => 'Telha', 'estado_id' => 26],
            ['cidade' => 'Tobias Barreto', 'estado_id' => 26],
            ['cidade' => 'Tomar do Geru', 'estado_id' => 26],
            ['cidade' => 'Umbaúba', 'estado_id' => 26]
        ]);

        $this->command->info('Cidades de Sergipe importadas com sucesso!');
    }
}