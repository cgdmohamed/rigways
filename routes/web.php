<?php

use App\Http\Controllers\ProjectsController;
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

Route::get('projects', [ProjectsController::class,'index']);

Route::get('projects/create', [ProjectsController::class,'create']);

Route::post('projects', [ProjectsController::class,'store']);

Route::get('projects/{id}', [ProjectsController::class,'show']);

Route::get('projects/{project}/edit', [ProjectsController::class,'edit']);

Route::put('projects/{project}', [ProjectsController::class,'update']);

Route::delete('projects/{project}', [ProjectsController::class,'destroy']);