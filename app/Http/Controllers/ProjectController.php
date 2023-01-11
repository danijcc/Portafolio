<?php

namespace App\Http\Controllers;
use App\Models\Project;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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

       $project->image = $request->file('image')->store('images'); 

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
        if($request->hasFile('image'))
        {   
            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = $request->file('image')->store('images'); 

            $project->save();

            //optimizacion de la imagen (bajar peso de la imagen)
            $image = Image::make(Storage::get($project->image));
            $image->widen(600)->encode();

            Storage::put($project->image, (string) $image); 

        }else{
             //ddd($request->validated());//impeccionar los que pasa por el request
             $project->update(array_filter($request->validated()));
        }
       
    
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
        Storage::delete($project->image);
        $project->delete();
        return redirect()->route('projects.index')->with('status','El proyecto fue eliminado con exito');
    }
}
