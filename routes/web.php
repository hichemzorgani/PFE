<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\AffectationController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\EcoleController;
use App\Http\Controllers\EncadrantController;
use App\Http\Controllers\StageController;
use App\Http\Controllers\ConsulterStageController;
use App\Http\Controllers\StatistiquesController;
use App\Http\Controllers\StatistiqueController;




// ------------nav (admin applicatif)------------------------------------------------------------------------------------------------------

Route::get('/home',[HomeController::class,'index']);

Route::get('/compte',[CompteController::class,'index'])->name('compte.index');

Route::get('/compte/create',[CompteController::class,'create'])->name('compte.create');
Route::post('/compte/store',[CompteController::class,'store'])->name('compte.store');
Route::get('/compte/{compte}/edit',[CompteController::class,'edit'])->name('compte.edit');
Route::put('/compte/{compte}',[CompteController::class,'update'])->name('compte.update');

Route::get('affectation',[AffectationController::class,'index'])->name('affectation.index');

Route::get('/affectation/create',[AffectationController::class,'create'])->name('affectation.create');
Route::post('/affectation/store',[AffectationController::class,'store'])->name('affectation.store');

Route::get('universite',[UniversiteController::class,'index'])->name('universite.index');

Route::get('/universite/create',[UniversiteController::class,'create'])->name('universite.create');
Route::post('/universite/store',[UniversiteController::class,'store'])->name('universite.store');
Route::get('/universite/{universite}/edit',[UniversiteController::class,'edit'])->name('universite.edit');
Route::put('/universite/{universite}',[UniversiteController::class,'update'])->name('universite.update');

Route::get('ecole',[ecoleController::class,'index'])->name('ecole.index');

Route::get('/ecole/create',[ecoleController::class,'create'])->name('ecole.create');
Route::post('/ecole/store',[ecoleController::class,'store'])->name('ecole.store');
Route::get('/ecole/{ecole}/edit',[EcoleController::class,'edit'])->name('ecole.edit');
Route::put('/ecole/{ecole}',[EcoleController::class,'update'])->name('ecole.update');

Route::get('encadrant',[EncadrantController::class,'index'])->name('encadrant.index');
Route::get('/encadrant/create',[EncadrantController::class,'create'])->name('encadrant.create');
Route::post('/encadrant/store',[EncadrantController::class,'store'])->name('encadrant.store');
Route::get('/encadrant/{encadrant}/edit',[EncadrantController::class,'edit'])->name('encadrant.edit');
Route::put('/encadrant/{encadrant}',[EncadrantController::class,'update'])->name('encadrant.update');

Route::get('/login', [LoginController::class,'show'])->name('login.show');
Route::post('/login', [LoginController::class,'login'])->name('login');

Route::get('/statistique',[StatistiqueController::class,'index'])->name('statistique.index');



// -----------------nav2 (admin)----------------------------------------------------------------------------------------------------------

Route::get('/stage',[StageController::class,'index'])->name('stage.index');

Route::get('/statistique',[StatistiquesController::class,'index'])->name('statistique2.index');



//----------------- nav3 (user)-----------------------------------------------------------------------------------------------------------

Route::get('/ConsulterStage',[ConsulterStageController::class,'index'])->name('consulterstage.index');







Route::get('/', function () {
    return view('welcome');
});
