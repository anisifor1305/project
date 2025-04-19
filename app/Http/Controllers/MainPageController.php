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
            // $user->projects = json_encode(['1', '2', '3']);
            // $user->save();
            return Inertia::render('Admin', ['message'=>'hello', 'token'=>csrf_token()]);
        }
        else{
            return Inertia::render('User', ['projects'=>$user->projects]);
        }
    }
}
