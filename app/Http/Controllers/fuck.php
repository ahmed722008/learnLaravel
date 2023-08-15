<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class fuck extends Controller
{
    public function index() {
        if (Auth::check()) {
            $id = 1;
            
            return view('html', [$id]);   
        }
    }
}
