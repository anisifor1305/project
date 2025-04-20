<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\User;

class ProjectController extends Controller
{
    function newProject(Request $request){
        $project = new Project();
        $project->code_name = $request->code_name;
        $project->lore = $request->lore;
        $project->save();
        return redirect('/');
    }

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
    function addProject(Request $request) {
        $user = User::where('login', $request->login)->first();
        if((Project::where('code_name', $request->code_name)->first()) && User::where('login', $request->login)->first() && !in_array($request->code_name, json_decode($user->projects))){
            $arrProjects = json_decode($user->projects);
            array_push($arrProjects, $request->code_name);
            $user->projects = $arrProjects;
            $user->save();
            return redirect('/');
        }
        else{
            return view('adderror');
        }
    }
}
