<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\Category;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;
use App\Events\ProjectSaved;


class projectController extends  Controller
{

    public function index()
    {   //variable que almacena el modelo de la tabla project

        //orderBy('created_at','DESC')->get();

        return view('projects.index',[
                'projects' => Project::with('category')->latest()->paginate()
        ]);
    }



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
            'project' => new Project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    public function store(SaveProjectRequest $request)
    {
       
       $project = new Project ($request->validated());

       $project->image = $request->file('image')->store('images'); 

       $project->save();
       
       ProjectSaved::dispatch($project);
    //    $this->optimizeImage($project);
     
       return redirect()->route('projects.index')->with('status','El proyecto fue creado con exito');
    }

    public function edit(Project $project)
    {
       
        return view('projects.edit',[ 
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
           ]);
    }

  
    public function update(Project $project, SaveProjectRequest $request)
    {
        
        if($request->hasFile('image'))
        {   
            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images'); 

            $project->save();

            
            ProjectSaved::dispatch($project);
            // $this->optimizeImage($project);

        }else{
             //ddd($request->validated());//impeccionar los que pasa por el request
             $project->update(array_filter($request->validated()));
        }
       
    
        return redirect()->route('projects.show', $project)->with('status','El proyecto fue actualizado con exito');
    }


    public function destroy(Project $project, SaveProjectRequest $request)
    {
        Storage::delete($project->image);
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }


}
