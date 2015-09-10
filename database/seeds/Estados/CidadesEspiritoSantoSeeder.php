<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CidadesEspiritoSantoSeeder extends Seeder {

    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        DB::table('cidades')->insert([
        	['cidade' => 'Afonso Cláudio', 'estado_id' => 8],
            ['cidade' => 'Água Doce do Norte', 'estado_id' => 8],
            ['cidade' => 'Águia Branca', 'estado_id' => 8],
            ['cidade' => 'Alegre', 'estado_id' => 8],
            ['cidade' => 'Alfredo Chaves', 'estado_id' => 8],
            ['cidade' => 'Alto Rio Novo', 'estado_id' => 8],
            ['cidade' => 'Anchieta', 'estado_id' => 8],
            ['cidade' => 'Apiacá', 'estado_id' => 8],
            ['cidade' => 'Aracruz', 'estado_id' => 8],
            ['cidade' => 'Atilio Vivacqua', 'estado_id' => 8],
            ['cidade' => 'Baixo Guandu', 'estado_id' => 8],
            ['cidade' => 'Barra de São Francisco', 'estado_id' => 8],
            ['cidade' => 'Boa Esperança', 'estado_id' => 8],
            ['cidade' => 'Bom Jesus do Norte', 'estado_id' => 8],
            ['cidade' => 'Brejetuba', 'estado_id' => 8],
            ['cidade' => 'Cachoeiro de Itapemirim', 'estado_id' => 8],
            ['cidade' => 'Cariacica', 'estado_id' => 8],
            ['cidade' => 'Castelo', 'estado_id' => 8],
            ['cidade' => 'Colatina', 'estado_id' => 8],
            ['cidade' => 'Conceição da Barra', 'estado_id' => 8],
            ['cidade' => 'Conceição do Castelo', 'estado_id' => 8],
            ['cidade' => 'Divino de São Lourenço', 'estado_id' => 8],
            ['cidade' => 'Domingos Martins', 'estado_id' => 8],
            ['cidade' => 'Dores do Rio Preto', 'estado_id' => 8],
            ['cidade' => 'Ecoporanga', 'estado_id' => 8],
            ['cidade' => 'Fundão', 'estado_id' => 8],
            ['cidade' => 'Governador Lindenberg', 'estado_id' => 8],
            ['cidade' => 'Guaçuí', 'estado_id' => 8],
            ['cidade' => 'Guarapari', 'estado_id' => 8],
            ['cidade' => 'Ibatiba', 'estado_id' => 8],
            ['cidade' => 'Ibiraçu', 'estado_id' => 8],
            ['cidade' => 'Ibitirama', 'estado_id' => 8],
            ['cidade' => 'Iconha', 'estado_id' => 8],
            ['cidade' => 'Irupi', 'estado_id' => 8],
            ['cidade' => 'Itaguaçu', 'estado_id' => 8],
            ['cidade' => 'Itapemirim', 'estado_id' => 8],
            ['cidade' => 'Itarana', 'estado_id' => 8],
            ['cidade' => 'Iúna', 'estado_id' => 8],
            ['cidade' => 'Jaguaré', 'estado_id' => 8],
            ['cidade' => 'Jerônimo Monteiro', 'estado_id' => 8],
            ['cidade' => 'João Neiva', 'estado_id' => 8],
            ['cidade' => 'Laranja da Terra', 'estado_id' => 8],
            ['cidade' => 'Linhares', 'estado_id' => 8],
            ['cidade' => 'Mantenópolis', 'estado_id' => 8],
            ['cidade' => 'Marataízes', 'estado_id' => 8],
            ['cidade' => 'Marechal Floriano', 'estado_id' => 8],
            ['cidade' => 'Marilândia', 'estado_id' => 8],
            ['cidade' => 'Mimoso do Sul', 'estado_id' => 8],
            ['cidade' => 'Montanha', 'estado_id' => 8],
            ['cidade' => 'Mucurici', 'estado_id' => 8],
            ['cidade' => 'Muniz Freire', 'estado_id' => 8],
            ['cidade' => 'Muqui', 'estado_id' => 8],
            ['cidade' => 'Nova Venécia', 'estado_id' => 8],
            ['cidade' => 'Pancas', 'estado_id' => 8],
            ['cidade' => 'Pedro Canário', 'estado_id' => 8],
            ['cidade' => 'Pinheiros', 'estado_id' => 8],
            ['cidade' => 'Piúma', 'estado_id' => 8],
            ['cidade' => 'Ponto Belo', 'estado_id' => 8],
            ['cidade' => 'Presidente Kennedy', 'estado_id' => 8],
            ['cidade' => 'Rio Bananal', 'estado_id' => 8],
            ['cidade' => 'Rio Novo do Sul', 'estado_id' => 8],
            ['cidade' => 'Santa Leopoldina', 'estado_id' => 8],
            ['cidade' => 'Santa Maria de Jetibá', 'estado_id' => 8],
            ['cidade' => 'Santa Teresa', 'estado_id' => 8],
            ['cidade' => 'São Domingos do Norte', 'estado_id' => 8],
            ['cidade' => 'São Gabriel da Palha', 'estado_id' => 8],
            ['cidade' => 'São José do Calçado', 'estado_id' => 8],
            ['cidade' => 'São Mateus', 'estado_id' => 8],
            ['cidade' => 'São Roque do Canaã', 'estado_id' => 8],
            ['cidade' => 'Serra', 'estado_id' => 8],
            ['cidade' => 'Sooretama', 'estado_id' => 8],
            ['cidade' => 'Vargem Alta', 'estado_id' => 8],
            ['cidade' => 'Venda Nova do Imigrante', 'estado_id' => 8],
            ['cidade' => 'Viana', 'estado_id' => 8],
            ['cidade' => 'Vila Pavão', 'estado_id' => 8],
            ['cidade' => 'Vila Valério', 'estado_id' => 8],
            ['cidade' => 'Vila Velha', 'estado_id' => 8],
            ['cidade' => 'Vitória', 'estado_id' => 8]
        ]);

        $this->command->info('Cidades do Espírito Santo importadas com sucesso!');
    }
}