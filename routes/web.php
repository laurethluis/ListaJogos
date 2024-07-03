<?php

use App\Http\Controllers\JogosController;
use App\Livewire\Games\GameComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',GameComponent::class)->name('jogos-index');

Route::prefix('jogos')->group(function(){
//Route::get('/',[JogosController::class,'index'])->name('jogos-index');
Route::get('/create',[JogosController::class,'create'])->name('jogos-create');
Route::post('/store',[JogosController::class,'store'])->name('jogos-store');
Route::get('/edit/{id}',[JogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
Route::get('/delete/{id}',[JogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
Route::get('/show',[JogosController::class,'show'])->name('show.games');


});

Route:: fallback(function(){
    return "Erro!";
});



