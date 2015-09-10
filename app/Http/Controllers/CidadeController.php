<?php namespace App\Http\Controllers;

use App\Estado;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CidadeController extends Controller
{

    private $estadoModel;

    public function __construct(Estado $estado)
    {
        $this->estadoModel = $estado;
    }

    public function index()
    {
        $estados = $this->estadoModel->lists('estado', 'id');

        return view('cidade', compact('estados'));
    }

    public function getCidades($idEstado)
    {
        $estado = $this->estadoModel->find($idEstado);
        $cidades = $estado->cidades()->getQuery()->get(['id', 'cidade']);
        return Response::json($cidades);
    }

}
