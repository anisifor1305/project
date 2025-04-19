<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainPageController extends Controller
{
    function showPanel(Request $request) {
        $user = User::where('login', session('login'))->first();
        if ($user->is_admin){
            return Inertia::render('Admin');
        }
        else{
            return Inertia::render('User');
        }
    }
}
