<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectDoneController extends Controller
{
    function projectDone($project) {
        $user = User::where('login', session('login'))->first();
        $arrProjects = json_decode($user->projects);
        $newArray = array();
        for ($i=0; $i < count($arrProjects); $i++) { 
            if ($arrProjects[$i]!=$project){
                array_push($newArray, $arrProjects[$i]);
            }
        }
        $user->projects=json_encode($newArray);
        $user->save();
        return redirect('/');

    }
}
