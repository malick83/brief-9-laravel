<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pays;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\EntrepriseController;


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
    $pays = Pays::all();
    return view('welcome');
});

Route::get('/pays', [PaysController::class, 'index']);
Route::get('/entreprises', [EntrepriseController::class,'index'])->name('entreprises.index');
Route::get('/entreprises/create', [EntrepriseController::class,'create'])->name('entreprises.create');
Route::post('/entreprises/store',[EntrepriseController::class,'store'])->name('entreprises.store');
Route::get('/entreprises/{entreprise}',[EntrepriseController::class,'show'])->name('entreprises.show');






