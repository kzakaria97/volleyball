<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\JoueurController;

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
    return view('welcome');
})->name('main');

Route::get('/team',[EquipeController::class,'index'])->name('seeTeam');
Route::get('/player',[JoueurController::class,'index'])->name('seePlayer');

// Route::get('/',[JoueurController::class,'index']);
Route::get('/createTeam',[EquipeController::class,'create'])->name('equipe');
Route::get('/creatPlayer',[JoueurController::class,'create'])->name('joueur');
// Route::get('/create',[JoueurController::class,'create']);
Route::post('/storeTeam',[EquipeController::class,'store']);
Route::post('/storePlayer',[JoueurController::class,'store']);

Route::get('{id}/editTeam',[EquipeController::class,'edit'])->name('editTeam');
Route::put('{id}/updateTeam',[EquipeController::class,'update'])->name('updateTeam');

Route::get('{id}/editPlayer',[JoueurController::class,'edit'])->name('editPlayer');
Route::put('{id}/updatePlayer',[JoueurController::class,'update'])->name('updatePlayer');

Route::delete('/{id}/deleteTeam',[EquipeController::class,'destroy']);
Route::delete('/{id}/deletePlayer',[JoueurController::class,'destroy']);

// Route::post('/store',[JoueurController::class,'store']);