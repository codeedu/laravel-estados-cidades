<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesAmazonasSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Alvarães', 'estado_id' => 4],
            ['cidade' => 'Amaturá', 'estado_id' => 4],
            ['cidade' => 'Anamã', 'estado_id' => 4],
            ['cidade' => 'Anori', 'estado_id' => 4],
            ['cidade' => 'Apuí', 'estado_id' => 4],
            ['cidade' => 'Atalaia do Norte', 'estado_id' => 4],
            ['cidade' => 'Autazes', 'estado_id' => 4],
            ['cidade' => 'Barcelos', 'estado_id' => 4],
            ['cidade' => 'Barreirinha', 'estado_id' => 4],
            ['cidade' => 'Benjamin Constant', 'estado_id' => 4],
            ['cidade' => 'Beruri', 'estado_id' => 4],
            ['cidade' => 'Boa Vista do Ramos', 'estado_id' => 4],
            ['cidade' => 'Boca do Acre', 'estado_id' => 4],
            ['cidade' => 'Borba', 'estado_id' => 4],
            ['cidade' => 'Caapiranga', 'estado_id' => 4],
            ['cidade' => 'Canutama', 'estado_id' => 4],
            ['cidade' => 'Carauari', 'estado_id' => 4],
            ['cidade' => 'Careiro', 'estado_id' => 4],
            ['cidade' => 'Careiro da Várzea', 'estado_id' => 4],
            ['cidade' => 'Coari', 'estado_id' => 4],
            ['cidade' => 'Codajás', 'estado_id' => 4],
            ['cidade' => 'Eirunepé', 'estado_id' => 4],
            ['cidade' => 'Envira', 'estado_id' => 4],
            ['cidade' => 'Fonte Boa', 'estado_id' => 4],
            ['cidade' => 'Guajará', 'estado_id' => 4],
            ['cidade' => 'Humaitá', 'estado_id' => 4],
            ['cidade' => 'Ipixuna', 'estado_id' => 4],
            ['cidade' => 'Iranduba', 'estado_id' => 4],
            ['cidade' => 'Itacoatiara', 'estado_id' => 4],
            ['cidade' => 'Itamarati', 'estado_id' => 4],
            ['cidade' => 'Itapiranga', 'estado_id' => 4],
            ['cidade' => 'Japurá', 'estado_id' => 4],
            ['cidade' => 'Juruá', 'estado_id' => 4],
            ['cidade' => 'Jutaí', 'estado_id' => 4],
            ['cidade' => 'Lábrea', 'estado_id' => 4],
            ['cidade' => 'Manacapuru', 'estado_id' => 4],
            ['cidade' => 'Manaquiri', 'estado_id' => 4],
            ['cidade' => 'Manaus', 'estado_id' => 4],
            ['cidade' => 'Manicoré', 'estado_id' => 4],
            ['cidade' => 'Maraã', 'estado_id' => 4],
            ['cidade' => 'Maués', 'estado_id' => 4],
            ['cidade' => 'Nhamundá', 'estado_id' => 4],
            ['cidade' => 'Nova Olinda do Norte', 'estado_id' => 4],
            ['cidade' => 'Novo Airão', 'estado_id' => 4],
            ['cidade' => 'Novo Aripuanã', 'estado_id' => 4],
            ['cidade' => 'Parintins', 'estado_id' => 4],
            ['cidade' => 'Pauini', 'estado_id' => 4],
            ['cidade' => 'Presidente Figueiredo', 'estado_id' => 4],
            ['cidade' => 'Rio Preto da Eva', 'estado_id' => 4],
            ['cidade' => 'Santa Isabel do Rio Negro', 'estado_id' => 4],
            ['cidade' => 'Santo Antônio do Içá', 'estado_id' => 4],
            ['cidade' => 'São Gabriel da Cachoeira', 'estado_id' => 4],
            ['cidade' => 'São Paulo de Olivença', 'estado_id' => 4],
            ['cidade' => 'São Sebastião do Uatumã', 'estado_id' => 4],
            ['cidade' => 'Silves', 'estado_id' => 4],
            ['cidade' => 'Tabatinga', 'estado_id' => 4],
            ['cidade' => 'Tapauá', 'estado_id' => 4],
            ['cidade' => 'Tefé', 'estado_id' => 4],
            ['cidade' => 'Tonantins', 'estado_id' => 4],
            ['cidade' => 'Uarini', 'estado_id' => 4],
            ['cidade' => 'Urucará', 'estado_id' => 4],
            ['cidade' => 'Urucurituba', 'estado_id' => 4]
        ]);

        $this->command->info('Cidades do Amazonas importadas com sucesso!');
    }
}