<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function auth(Request $request){

        $user = User::where('login', $request->login)->first();
        if ($user && password_verify($request->password, $user->password_hash)){
            session(['userAuth'=>'true']);
            session(['login'=>$request->login]);
            return redirect('/');
        }

        else{
            return view('autherror');
        }
    }
    function logout(){
        session()->flush();
        return redirect('/');
    }
}
