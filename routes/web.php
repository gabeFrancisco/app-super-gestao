<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\FornecedorController;

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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobrenos', [SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/login', [SobreNosController::class, 'login'])->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', [SobreNosController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('site.fornecedores');
    Route::get('/produtos', [SobreNosController::class, 'produtos'])->name('app.produtos');
});

Route::get('teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste');


// Route::redirect('/rota2', '/rota1');
// Route::get('rota2', function () { 
//     return redirect()->route('site.rota1');
// })->name('site.rota2');

// Route::get(/
//     'contato/{nome}/{categoria_id}',
//     function (string $nome, int $categoria_id = 1) {
//         echo 'Estamos aqui! Bem vindo ' . $nome . " " . $categoria_id;
//     }
// )->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');

// Route::get('/god', function () {
//     return view('god');
// });

Route::fallback(function (){
    echo 'Página não encontrada! Por favor, <a href="'.route('site.index').'">clique aqui</a> para ir a página inicial!';
});