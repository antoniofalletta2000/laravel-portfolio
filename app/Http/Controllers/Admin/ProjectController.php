<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        $types = Type::all();

        return view("projects.index", compact("projects", "types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newProject = new Project();

        $newProject->nome = $data["nome"];
        $newProject->cliente = $data["cliente"];
        $newProject->periodo = $data["periodo"];
        $newProject->riassunto = $data["riassunto"];

        $newProject->type_id = $data["type_id"];

        $newProject->save();

        if ($request->has("tecchnologies")) {
            $$newProject->technologies()->attach($data["technologies"]);
        }

        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        /* dd($project); */
        $types = Type::all();
        return view("projects.show", compact("project", "types"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.edit", compact("project", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->nome = $data["nome"];
        $project->cliente = $data["cliente"];
        $project->periodo = $data["periodo"];
        $project->riassunto = $data["riassunto"];

        $project->type_id = $data["type_id"];

        $project->update();

        if ($request->has("technologies")) {
            $project->technologies()->sync($data["technologies"]);
        } else {
            $project->technologies()->detach();
        }

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route("projects.index");
    }
}
