<?php

use App\Http\Controllers\ClinteController;

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/','ClienteController@index');
Route::get('/novocliente','ClienteController@create');
Route::post('/novocliente','ClienteController@store');
//Route::get('/cliente','ClienteController@store');