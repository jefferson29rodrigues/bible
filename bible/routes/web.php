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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/ranking', function () {
    $colocacao = 6;

    $primeiro = rand(1,2); 
    $segundo = rand(0,4); 
    $terceiro = rand(0,4);  
    $quarto = rand(0,4); 
    $quinto = rand(0,4); 

    $pessoas = [
        'josé' => 1,
        'joão' => 2,
        'maria' => 3,
        'pedro' => 4,
        'marcos' => 5
    ];

    if ($pessoas['joão'] == $primeiro) {
        echo "O primeiro é joão";
    }

    $arr = [1, 2, 3, 4, 5];
    $top5 = [$primeiro, $segundo, $terceiro, $quarto, $quinto];
    
    return view('ranking', 
        [
            'posicao' => $colocacao,
            'positions' => $arr,
            'colocados' => $top5,
            'pessoas' => $pessoas
        ]
    );
});

Route::get('/chat', function () {
    return view('/forum');
});

Route::get('/chat/{id}', function ($id) {
    return view('/chater', ['id' => $id]);
});

Route::get('/produtos', function () {

    $busca = request('search');
    $busca2 = request('idade');

    return view('/products', ['busca' => $busca, 'idade' => $busca2]);
});

Route::get('/produtos_teste/{id?}', function ($id = null) {
    return view('/product', ['id' => $id]);
});

Route::get('/contact', function () {
    return view('/contact');
});
