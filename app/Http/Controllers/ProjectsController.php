<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
	//Get all Projects
    public function index()
    {
    	return Project::all();
    }

    //Find specificed Project
    public function show(Project $project)
    {
    	return $project;
    }

    //Store project using passed arguments
    public function store(Request $request)
    {
        //Project Name is missing
        if (empty($_POST['name'])) {
            return response()->json("Missing Project name", 400);
        }
        //Client name is missing
        if (empty($_POST['client_name'])) {
            return response()->json("Missing Client name", 400);
        }
    	$project = Project::create($request->all());
    	return response()->json($project, 201);
    }

    //Delete specificed projects
    public function delete(Project $project)
    {
    	$project->delete();
    	return response()->json(null, 204);
    }
}