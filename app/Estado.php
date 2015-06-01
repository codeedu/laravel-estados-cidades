<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{

    protected $fillable = ['nome'];

    public $timestamps = false;

    public function cidades()
    {
        return $this->hasMany('App\Cidade');
    }

}
