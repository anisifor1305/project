<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class NewProjectController extends Controller
{
    function newProject(Request $request){
        $project = new Project();
        $project->code_name = $request->code_name;
        $project->lore = $request->lore;
        $project->save();
        return redirect('/');
    }
}
