<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| ARQUIVO DE ROTAS WEB
|--------------------------------------------------------------------------
*/

//------------- ROTAS AUTENTICAÇÃO LARAVEL ----------------//

Route::get('/welcome', function () {
    return Inertia::render('WelcomeLaravel', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//---------------- ROTAS PARA ORGANIZAR ----------------//

Route::get('/', function(){
    return Inertia::render('Welcome');
})->name('welcome');

Route::get('/admin', function(){
    return Inertia::render('Dashboard-admin');
})->name('admin');

Route::get('/aluno', function(){
    return Inertia::render('Dashboard-aluno');
})->name('alunos');

Route::get('/prof', function(){
    return Inertia::render('Dashboard-professor');
})->name('professor');

Route::get('/requerimentos', function(){
    return Inertia::render('Dashboard-professor');
})->name('requerimentos');

Route::get('/turmas', function(){
    return Inertia::render('Dashboard-professor');
})->name('turmas');

Route::get('/disciplinas', function(){
    return Inertia::render('Dashboard-professor');
})->name('disciplinas');

Route::get('/cursos', function(){
    return Inertia::render('Dashboard-professor');
})->name('cursos');




