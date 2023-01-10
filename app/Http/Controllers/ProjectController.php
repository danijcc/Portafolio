<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Http\Requests\SaveProjectRequest;

class projectController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //variable que almacena el modelo de la tabla project

        //orderBy('created_at','DESC')->get();

        return view('projects.index',[
                'projects' => Project::latest()->paginate()
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
         //return $id;
        // return Project::find($id);
        //$project = Project::findOrFail($id);
        //'project' => Project::findOrFail($id)
        return view('projects.show',[ //aca utilizamos route model biding
          'project' => $project
         ]);
    }
    public function create()
    {
        return view('projects.create',[
            'project' => new Project
        ]);
    }
    public function store(SaveProjectRequest $request)
    {
       
       $project = new Project ($request->validated());

       $project->image = $request->file('image')->store('images','public'); 

       $project->save();
       
     
       return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',[ 
            'project' => $project
           ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());
        // $project->update([
        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description'),
        // ]);
        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }
}
