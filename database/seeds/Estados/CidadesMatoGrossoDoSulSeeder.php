<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesMatoGrossoDoSulSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Água Clara', 'estado_id' => 12],
            ['cidade' => 'Alcinópolis', 'estado_id' => 12],
            ['cidade' => 'Amambaí', 'estado_id' => 12],
            ['cidade' => 'Anastácio', 'estado_id' => 12],
            ['cidade' => 'Anaurilândia', 'estado_id' => 12],
            ['cidade' => 'Angélica', 'estado_id' => 12],
            ['cidade' => 'Antônio João', 'estado_id' => 12],
            ['cidade' => 'Aparecida do Taboado', 'estado_id' => 12],
            ['cidade' => 'Aquidauana', 'estado_id' => 12],
            ['cidade' => 'Aral Moreira', 'estado_id' => 12],
            ['cidade' => 'Bandeirantes', 'estado_id' => 12],
            ['cidade' => 'Bataguassu', 'estado_id' => 12],
            ['cidade' => 'Bataiporã', 'estado_id' => 12],
            ['cidade' => 'Bela Vista', 'estado_id' => 12],
            ['cidade' => 'Bodoquena', 'estado_id' => 12],
            ['cidade' => 'Bonito', 'estado_id' => 12],
            ['cidade' => 'Brasilândia', 'estado_id' => 12],
            ['cidade' => 'Caarapó', 'estado_id' => 12],
            ['cidade' => 'Camapuã', 'estado_id' => 12],
            ['cidade' => 'Campo Grande', 'estado_id' => 12],
            ['cidade' => 'Caracol', 'estado_id' => 12],
            ['cidade' => 'Cassilândia', 'estado_id' => 12],
            ['cidade' => 'Chapadão do Sul', 'estado_id' => 12],
            ['cidade' => 'Corguinho', 'estado_id' => 12],
            ['cidade' => 'Coronel Sapucaia', 'estado_id' => 12],
            ['cidade' => 'Corumbá', 'estado_id' => 12],
            ['cidade' => 'Costa Rica', 'estado_id' => 12],
            ['cidade' => 'Coxim', 'estado_id' => 12],
            ['cidade' => 'Deodápolis', 'estado_id' => 12],
            ['cidade' => 'Dois Irmãos do Buriti', 'estado_id' => 12],
            ['cidade' => 'Douradina', 'estado_id' => 12],
            ['cidade' => 'Dourados', 'estado_id' => 12],
            ['cidade' => 'Eldorado', 'estado_id' => 12],
            ['cidade' => 'Fátima do Sul', 'estado_id' => 12],
            ['cidade' => 'Figueirão', 'estado_id' => 12],
            ['cidade' => 'Glória de Dourados', 'estado_id' => 12],
            ['cidade' => 'Guia Lopes da Laguna', 'estado_id' => 12],
            ['cidade' => 'Iguatemi', 'estado_id' => 12],
            ['cidade' => 'Inocência', 'estado_id' => 12],
            ['cidade' => 'Itaporã', 'estado_id' => 12],
            ['cidade' => 'Itaquiraí', 'estado_id' => 12],
            ['cidade' => 'Ivinhema', 'estado_id' => 12],
            ['cidade' => 'Japorã', 'estado_id' => 12],
            ['cidade' => 'Jaraguari', 'estado_id' => 12],
            ['cidade' => 'Jardim', 'estado_id' => 12],
            ['cidade' => 'Jateí', 'estado_id' => 12],
            ['cidade' => 'Juti', 'estado_id' => 12],
            ['cidade' => 'Ladário', 'estado_id' => 12],
            ['cidade' => 'Laguna Carapã', 'estado_id' => 12],
            ['cidade' => 'Maracaju', 'estado_id' => 12],
            ['cidade' => 'Miranda', 'estado_id' => 12],
            ['cidade' => 'Mundo Novo', 'estado_id' => 12],
            ['cidade' => 'Naviraí', 'estado_id' => 12],
            ['cidade' => 'Nioaque', 'estado_id' => 12],
            ['cidade' => 'Nova Alvorada do Sul', 'estado_id' => 12],
            ['cidade' => 'Nova Andradina', 'estado_id' => 12],
            ['cidade' => 'Novo Horizonte do Sul', 'estado_id' => 12],
            ['cidade' => 'Paranaíba', 'estado_id' => 12],
            ['cidade' => 'Paranhos', 'estado_id' => 12],
            ['cidade' => 'Pedro Gomes', 'estado_id' => 12],
            ['cidade' => 'Ponta Porã', 'estado_id' => 12],
            ['cidade' => 'Porto Murtinho', 'estado_id' => 12],
            ['cidade' => 'Ribas do Rio Pardo', 'estado_id' => 12],
            ['cidade' => 'Rio Brilhante', 'estado_id' => 12],
            ['cidade' => 'Rio Negro', 'estado_id' => 12],
            ['cidade' => 'Rio Verde de Mato Grosso', 'estado_id' => 12],
            ['cidade' => 'Rochedo', 'estado_id' => 12],
            ['cidade' => 'Santa Rita do Pardo', 'estado_id' => 12],
            ['cidade' => 'São Gabriel do Oeste', 'estado_id' => 12],
            ['cidade' => 'Selvíria', 'estado_id' => 12],
            ['cidade' => 'Sete Quedas', 'estado_id' => 12],
            ['cidade' => 'Sidrolândia', 'estado_id' => 12],
            ['cidade' => 'Sonora', 'estado_id' => 12],
            ['cidade' => 'Tacuru', 'estado_id' => 12],
            ['cidade' => 'Taquarussu', 'estado_id' => 12],
            ['cidade' => 'Terenos', 'estado_id' => 12],
            ['cidade' => 'Três Lagoas', 'estado_id' => 12],
            ['cidade' => 'Vicentina', 'estado_id' => 12]
        ]);

        $this->command->info('Cidades do Mato Grosso do Sul importadas com sucesso!');
    }
}