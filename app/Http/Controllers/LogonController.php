<?php

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class LogonController extends Controller
{
    public function create()
    {
        $user = Auth::user();


        if (Auth::user()->tipo == "Administrador") {
            return Inertia::render('DashboardAdmin', ['user' => $user]);
        } 
        
        if(Auth::user()->tipo == "Professor") {
            return Inertia::render('DashboardProf', ['user' => $user]);
        }

        return Inertia::render('DashboardAluno', ['user' => $user]);
    }
}
