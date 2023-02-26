<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RigsController;
use App\Http\Controllers\CertificatesController;
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

Route::middleware('auth')->get('/', function () {
    return view('dashboard');
});

//projects routes
Route::middleware('auth')->group(function () {
    Route::get('projects', [ProjectsController::class,'index'])->name('projects');
    Route::get('projects/create', [ProjectsController::class,'create'])->name('create-project');
    Route::post('projects', [ProjectsController::class,'store']);
    Route::get('projects/{id}', [ProjectsController::class,'show']);
    Route::get('projects/{project}/edit', [ProjectsController::class,'edit']);
    Route::put('projects/{project}', [ProjectsController::class,'update']);
    Route::delete('projects/{project}', [ProjectsController::class,'destroy']);

    Route::get('rigs', [RigsController::class, 'index'])->name('rigs');
    Route::get('rigs/create', [RigsController::class,'create'])->name('create-rig');
    Route::post('rigs', [RigsController::class,'store']);
    Route::get('rigs/{id}', [RigsController::class,'show']);
    Route::get('rigs/{rig}/edit', [RigsController::class,'edit']);
    Route::put('rigs/{rig}', [RigsController::class,'update']);
    Route::delete('rigs/{rig}', [RigsController::class,'destroy']);

    Route::get('certs', [CertificatesController::class, 'index'])->name('certs');
    Route::get('certs/create-cert', [CertificatesController::class,'create'])->name('create-cert');
    Route::post('certs', [CertificatesController::class,'store']);
    Route::get('certs/{id}', [CertificatesController::class,'show']);
    Route::get('certs/{cert}/edit', [CertificatesController::class,'edit']);
    Route::put('certs/{cert}', [CertificatesController::class,'update']);
    Route::delete('certs/{cert}', [CertificatesController::class,'destroy']);
    Route::post('/certs/upload', [RigsController::class, 'upload'])->name('certs.upload');
    Route::get('/certificates/{id}/download', [CertificatesController::class, 'downloadCertificate'])->name('certificates.download');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
