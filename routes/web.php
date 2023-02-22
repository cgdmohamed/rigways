<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RigsController;
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

Route::get('/', function () {
    return view('welcome');
});

//projects routes

Route::get('projects', [ProjectsController::class,'index'])->name('projects');

Route::get('projects/create', [ProjectsController::class,'create'])->name('create');

Route::post('projects', [ProjectsController::class,'store']);

Route::get('projects/{id}', [ProjectsController::class,'show']);

Route::get('projects/{project}/edit', [ProjectsController::class,'edit']);

Route::put('projects/{project}', [ProjectsController::class,'update']);

Route::delete('projects/{project}', [ProjectsController::class,'destroy']);

//rigs routes
//Route::get('rigs', [RigsController::class, 'index']);

Route::get('/rigs', [RigsController::class, 'index']);
/*
Route::get('rigs/create', [RigsController::class,'create'])->name('create');

Route::post('rigs', [RigsController::class,'store']);

Route::get('rigs/{id}', [RigsController::class,'show']);

Route::get('rigs/{rig}/edit', [RigsController::class,'edit']);

Route::put('rigs/{rig}', [RigsController::class,'update']);

Route::delete('rigs/{rig}', [RigsController::class,'destroy']);
*/