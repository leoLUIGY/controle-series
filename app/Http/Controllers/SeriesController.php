<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as FacadesDB;

class SeriesController extends Controller
{
       public function index(Request $request)
    {
        $series =Serie::query()->orderBy('nome')->get();

       return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');

        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        Serie::destroy($id);

         return redirect('/series');
    }
}
