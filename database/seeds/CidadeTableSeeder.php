<?php
use App\Cidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CidadeTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cidades')->truncate();


        foreach (range(1, 100) as $i) {
            Cidade::create([
                'nome' => "Cidade $i",
                'estado_id' => rand(1, 15)
            ]);
        }
    }
}