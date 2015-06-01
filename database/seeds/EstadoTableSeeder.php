<?php
use App\Estado;
use \Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class EstadoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('estados')->truncate();


        foreach (range(1, 15) as $i)
        {
            Estado::create([
                    'nome' => "Estado $i"
            ]);
        }
    }
}