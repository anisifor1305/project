<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    function newUser(Request $request){
        $user = new User();
        $user->login=$request->login;
        $user->password_hash=password_hash($request->password, PASSWORD_BCRYPT);
        $user->is_admin=false;
        $user->save();
        return redirect('/');

    }
}
