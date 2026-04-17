<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\Atividade2;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;

Route::resource('clientes', ClienteController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('produtos', ProdutoController::class);
Route::resource('usuarios', Atividade2::class);

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::resource('tec-web-3', App\Http\Controllers\Atividade2::class);

require __DIR__.'/settings.php';
