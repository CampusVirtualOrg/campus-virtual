<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;



class AccessibleController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if($user){
            Auth::logout();
        }

        return Inertia::render('Welcome');
    }
}
