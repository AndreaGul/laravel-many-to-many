<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $types = Type::all();
        $technologies = Technology::all();

        return view('admin.projects.create',compact('types','technologies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {   
       

        $data = $request->validated();
        
        
        $project = new Project();

       
        // $project->title = $data['title'];
        // $project->author = $data['author'];
        // $project->description = $data['description'];
        // $project->creation_date = $data['creation_date'] ;
        // $project->last_update = $data['last_update'];
        // $project->contributors = $data['contributors'];
        // $project->lang = $data['lang'];
        // $project->link_github = $data['link_github'];
        
        $project -> fill($data);
         
        $project->slug = Str::of($data['title'])->slug('-');
        $project->save();
        
        return redirect()->route('admin.projects.index');
  
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {   
        //ricerca in slug se non si va a cambiare la ricerca di default con i parameters nelle resource route
        //public function show(String $slug)
        // $product = Project::where('slug', $slug)->first();
        // dd($product);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {   
         $types = Type::all();

         $technologies = Technology::all();
        
        return view('admin.projects.edit', compact('project', 'types','technologies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->slug = Str::of($data['title'])->slug('-');
        $project -> update($data);

        if(isset($data ['technologies'])){
            $project->technologies()->sync($data['technologies']);
        }else
        {
            $project->technologies()->sync([]);
        }
        
        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {   
        $project->delete();

        return redirect()->route('admin.projects.index');
    }
}
