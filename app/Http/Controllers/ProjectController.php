<?php

namespace App\Http\Controllers;


use App\Models\Project;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        return view('projects.index', [
            'projects' => Project::latest()->paginate()//latest('updated_at')-> get();
       ]);
    }

    public function show ($id)
    {
        return view('projects.show',[
            'project'=> Project::findorFail($id)
        ]);
    }

    public function create ()
    {
        return view('projects.create');
    }

    public function store (SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status','Proyecto creado exitosamente');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
           'project'=> $project
        ]);
    }

    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status','Proyecto actualizado exitosamente');
    }

    public function destroy (Project $project)
    {
        $project-> delete();
        return redirect()->route('projects.index')->with('status','Proyecto eliminado exitosamente');
    }
}
