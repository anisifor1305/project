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
            $arrCodeNames = array();
            $arrLores = array();
            foreach (Project::all() as $project) {
                array_push($arrCodeNames, $project->code_name);
                array_push($arrLores, $project->lore);
            }
            $users = User::all();
            return Inertia::render('Admin', ['message'=>'hello', 'users'=>$users, 'code_names'=>$arrCodeNames, 'lores'=>$arrLores, 'token'=>csrf_token()]);
        }
        else{
            $arrCodeNames = array();
            $arrLores = array();
            if($user->projects){
            for($i=0; $i<count(json_decode($user->projects)); $i++) {
                $project = Project::where('code_name', json_decode($user->projects)[$i])->first();
                array_push($arrCodeNames, $project->code_name);
                array_push($arrLores, $project->lore);
            }
        }
            return Inertia::render('User', ['code_names'=>$arrCodeNames, 'lores'=>$arrLores]);
        }
    }
}
