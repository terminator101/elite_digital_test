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