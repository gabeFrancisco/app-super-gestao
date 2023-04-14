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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos']);

Route::get('/god', function () {
    return view('god');
});