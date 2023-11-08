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

require __DIR__ . '/auth.php';


//---------------- ROTAS MANUAIS  ----------------//

// Landing Page

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('welcome');


//--- ROTAS DO ADMINISTRADOR ---//

Route::middleware(['auth', 'administrador'])->group(function () {
    // Home
    Route::get('/admin', function () {
        return Inertia::render('DashboardAdmin');
    })->name('admin');

    // Usuarios
    
    Route::get('/usuarios', function () {
        return Inertia::render('DashboardUsuarios');
    })->name('usuarios');
    
    // Requerimentos
    
    Route::get('/requerimentos', function () {
        return Inertia::render('DashboardRequerimentos');
    })->name('requerimentos');
    
    // Turmas
    
    Route::get('/turmas', function () {
        return Inertia::render('DashboardTurmas');
    })->name('turmas');
    
    // Disciplinas
    
    Route::get('/disciplinas', function () {
        return Inertia::render('DashboardDisciplinas');
    })->name('disciplinas');
    
    // Cursos
    
    Route::get('/cursos', function () {
        return Inertia::render('DashboardCursos');
    })->name('cursos');
    
});

//--- ROTAS DO ALUNO ---//

Route::middleware(['auth', 'aluno'])->group(function () {
    Route::get('/aluno', function () {
        return Inertia::render('HomeAluno');
    })->name('homeAluno');
});

//--- ROTAS DO PROFESSOR ---//

Route::middleware(['auth', 'professor'])->group(function () {
    Route::get('/professor', function () {
        return Inertia::render('HomeProfessor');
    })->name('homeProfessor');
});






