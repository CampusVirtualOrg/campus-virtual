<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class AccessibleController extends Controller
{
    public function index(){
        return Inertia::render('Welcome');
    }
}
