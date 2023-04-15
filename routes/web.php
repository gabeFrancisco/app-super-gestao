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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/login', [\App\Http\Controllers\SobreNosController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', [\App\Http\Controllers\SobreNosController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\SobreNosController::class, 'fornecedores'])->name('site.fornecedores');
    Route::get('/produtos', [\App\Http\Controllers\SobreNosController::class, 'produtos'])->name('app.produtos');
});

// Route::get(
//     'contato/{nome}/{categoria_id}',
//     function (string $nome, int $categoria_id = 1) {
//         echo 'Estamos aqui! Bem vindo ' . $nome . " " . $categoria_id;
//     }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

// Route::get('/god', function () {
//     return view('god');
// });