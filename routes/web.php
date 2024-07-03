<?php

use App\Http\Controllers\JogosController;
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


//route::view('/jogos','jogos');

//route::view('/jogos','jogos',////  ['name'=>'GTA']);

//route::get('/jogos/{id?}/{name?}', function ($id=null,$name=null){
//return view('jogos',['idjogo'=>$id,'nomejogo'=>$name]);
 
//})->where(['id','[0-9]+','name'=>'[a-z]+']);   

//route::get('/jogos',function(){
 //   return view('jogos');
//});


//route::get('/jogos',[JogosController::class, 'index']); 


//route::get('/home',function (){
  //  return view('welcome');
//})->name('home-index');

 

Route::prefix('jogos')->group(function(){

Route::get('/',[JogosController::class,'index'])->name('jogos-index');
Route::get('/create',[JogosController::class,'create'])->name('jogos-create');
Route::post('/store',[JogosController::class,'store'])->name('jogos-store');
Route::get('/edit/{id}',[JogosController::class,'edit'])->where('id','[0-9]+')->name('jogos-edit');
Route::delete('/delete',[JogosController::class,'destroy'])->where('id','[0-9]+')->name('jogos-destroy');
Route::get('/show',[JogosController::class,'show'])->name('show.games');


});

Route:: fallback(function(){
    return "Erro!";
});



