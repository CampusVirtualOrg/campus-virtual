<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LogonController;
use App\Http\Controllers\RequerimentosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccessibleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Api\AlunoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\DisciplinasController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\TurmaController;


/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [AccessibleController::class, 'index'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/logon', [LogonController::class, 'create']);

    // CRIAÇÃO DE REQUERIMENTOS

    Route::get('/requerimento', [RequerimentosController::class, 'createIndex']);
    Route::post('/enviarRequerimento', [RequerimentosController::class, 'create'])->name('enviarRequerimento');
});


//-------------- ROTAS DO ADMINISTRADOR ---------------//

Route::middleware('administrador')->group(function () {
    Route::get('/adm', [AdminController::class, 'home'])->name('admin');

    // USUARIOS

    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    Route::controller(AdminController::class)->group(function () {
        Route::get('/usuarios', 'users')->name('usuarios');
        Route::get('/usuarios/edit/{id}', 'indexUpdate');
        Route::post('/usuarios/edit/{id}', 'edit');
        Route::get('/usuarios/remove/{id}', 'remove');
    });

    // REQUERIMENTOS

    Route::controller(RequerimentosController::class)->group(function () {
        Route::get('/dashboardRequerimentos', 'create')->name('dashboardRequerimentos');
        Route::get('/requerimentos', 'showAll')->name("requerimentos");
        Route::post('/requerimentos', 'search');
        Route::get('/requerimentos/edit/{id}', 'updateIndex');
        Route::post('/requerimentos/edit/{id}', 'update');
        Route::get('/requerimentos/remove/{id}', 'remove');
    });
});

Route::middleware(['administrador', 'professor'])->group(function () {
    Route::get('/turmas', [TurmaController::class, 'showAll'])->name('turmas');
    Route::get('/disciplinas', [DisciplinasController::class, 'showAll'])->name('disciplinas');
    Route::get('/cursos', [CursosController::class, 'showAll'])->name('cursos');
});


//------------------ ROTAS DO ALUNO --------------------//

Route::middleware('aluno')->group(function () {
    Route::get('/aluno', [AlunoController::class, 'index'])->name('homeAluno');
});


//---------------- ROTAS DO PROFESSOR ------------------//

Route::middleware(['auth', 'professor'])->group(function () {
    Route::get('/professor', [ProfessorController::class, 'index'])->name('homeProfessor');
});

require __DIR__ . '/auth.php';
