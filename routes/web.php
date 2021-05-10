<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // tipi di pasta
    $data = config('paste');

    $pastaLunga = [];
    $pastaCorta = [];
    $pastaCortissima = [];

    foreach($data as $key => $pasta){

        $pasta['id'] = $key; 

        if($pasta['tipo'] == "lunga"){
            $pastaLunga[]= $pasta;
        }elseif($pasta['tipo'] == "corta"){
            $pastaCorta[] = $pasta;
        }elseif($pasta['tipo'] == "cortissima"){
            $pastaCortissima[] = $pasta;
        }
    }
    
    
    return view('home', [
        'lunga' => $pastaLunga,
        'corta' => $pastaCorta,
        'cortissima' => $pastaCortissima
        ]);
});

Route::get('/news', function(){
    return view('news');
});

Route::get('prodotti/{id}', function ($id) {

    $data = config('paste');

    $pasta = $data[$id];
    
    return view('prodotti', [
        'pasta' => $pasta
    ]);

})->where('id', '[0-9]+')->name('prodotto');