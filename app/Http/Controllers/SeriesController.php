<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as FacadesDB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series =Serie::query()->get();

        $mensagemSucesso = session('mensagem.sucesso');
   

       return view('series.index')->with('series', $series)->with("mensagemSucesso", $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem.sucesso',"Série {$serie->nome} adicionada com sucesso");

        return to_route("series.index");
    }

    public function destroy(Serie $series, Request $request)
    {

        $series->delete();
        $request->session()->flash("mensagem.sucesso", "Série {$series->nome} removida com sucesso");

         return to_route("series.index");
    }

    public function edit(Serie $series) {
        return view("series.edit")->with("serie", $series);
    }

    public function update(Serie $series, Request $request)
    {
        $series->nome = $request->nome;
        $series->save();

        return to_route('series.index')
        ->with('mensagem.sucesso', "Série {$series->nome} atualizada com sucesso");
    }
}
