<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function auth(Request $request){
        // $user = new User();
        // $user->login='root';
        // $user->password_hash=password_hash('root', PASSWORD_DEFAULT);
        // $user->save();

        $user = User::where('login', $request->login)->first();
        // return response([$user, password_hash($request->password, PASSWORD_BCRYPT)]);
        if (password_verify($request->password, $user->password_hash)){
            session(['userAuth'=>'true']);
            return redirect('/');
        }

        else{
            return view('autherror');
        }
    }
}
