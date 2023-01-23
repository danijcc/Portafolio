<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Project;

class ListProjectTest extends TestCase
{    
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_all_projects_view_index_ok()
    {   

        $this->withoutExceptionHandling(); // nos muestra el error detallado
        
        // Setup
        $project = Project::create([
            'title' => 'Mi nuevo proyecto',
            'url'=>'mi-nuevo-proyecto',
            'description'=>'Descricion de mi project'
        ]);

        $project2 = Project::create([
            'title' => 'Mi segundo proyecto',
            'url'=>'mi-segundo-proyecto',
            'description'=>'Descricion de mi project'
        ]);

     
        // Action 
        $response = $this->get(route('projects.index'));//get request a la ruta projects.index que trae todos los proyectos

        // Debug
        //$response->dump();
        
        // Assert
        $response->assertStatus(200);//codigo de respuesta http esperado
        $response->assertViewIs('projects.index');//vista esperada index
        $response->assertViewHas('projects');//revisa si en la vista tenemos esta variable disponible
        $response->assertSee($project->title);//verificamos si ve el titulo del proyecto
        $response->assertSee($project2->title);//verificamos si ve el titulo del proyecto segundo proyecto
        
    }

    public function test_can_see_individual_projects_view_show_ok()
    {
         // Setup
         $project = Project::create([
            'title' => 'Mi nuevo proyecto',
            'url'=>'mi-nuevo-proyecto',
            'description'=>'Descricion de mi project'
        ]);

        $project2 = Project::create([
            'title' => 'Mi segundo proyecto',
            'url'=>'mi-segundo-proyecto',
            'description'=>'Descricion de mi project'
        ]);

        $response = $this->get(route('projects.show', $project));//get request a la ruta projects.show

        $response->assertSee($project->title);//verificamos si ve el titulo del proyecto
        $response->assertDontSee($project2->title);//verificamos si no ve el titulo del proyecto
    }
}
