<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
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
            $arrCodeNames = array();
            $arrLores = array();
            for($i=0; $i<count(json_decode($user->projects)); $i++) {
                $project = Project::where('code_name', json_decode($user->projects)[$i])->first();
                array_push($arrCodeNames, $project->code_name);
                array_push($arrLores, $project->lore);
            }
            return Inertia::render('User', ['code_names'=>$arrCodeNames, 'lores'=>$arrLores]);
        }
    }
}
