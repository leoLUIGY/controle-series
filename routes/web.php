<?php

use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/series');
});

Route::resource('/series', SeriesController::class)
    ->except(['show']);


Route::get('/series/{series}/seasons', [SeasonsController::class, "index"])->name("seasons.index");

//Route::get('/series/atualizar', [SeriesController::class,'update']);
    
//Route::delete('/series/destroy/{serie}', [SeriesController::class,'destroy'])->name('series.destroy');
// Route::controller(SeriesController::class)->group(function() {
//     Route::get('/series',  'index')->name("series.index");
//     Route::get('/series/create',  'create')->name("series.create");
//     Route::post('/series/salvar',  'store')->name("series.store");
//     Route::post('/series/remover', 'delete');
//     Route::get('/series/update', 'update');
//     Route::post('/series/update', 'update');

// });
