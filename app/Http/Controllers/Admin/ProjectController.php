<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Project;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('admin.projects.index',['projects' => $projects]);
    }

    public function create(){
        $categories = Category::all();
        return view('admin.projects.create',['categories'=> $categories]);
    }

    public function store(Request $request, Project $project){
       
        $formFields = $request->validate([
            'category_id'=> 'required',
            'title'=> 'required|min:2',
            'url'=> 'required',
            'image'=> 'required|mimes:png,jpeg,jpg',

        ]);

        $formFields['category_id'] = $request->category_id;
        $formFields['description'] = $request->description;
        $formFields['image'] = $request->file('image')->store('projects','public');
        $project->create($formFields);
        return redirect()->route('projects.index')->with('success', 'Project has been created');
    }

    public function edit(Project $project){

        $categories = Category::all();

        return view('admin.projects.edit',[

            'project'=> $project,
            'categories'=> $categories,

        ]);

    }
    public function update(Request $request, Project $project){
       
        $formFields = $request->validate([
            'category_id'=> 'required',
            'title'=> 'required|min:2',
            'url'=> 'required',
        ]);

        $formFields['category_id'] = $request->category_id;
        $formFields['description'] = $request->description;
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('projects','public');
        }
    
        $project->update($formFields);
        return redirect()->route('projects.index')->with('success', 'Project has been Updated');
    }

    public function destroy(Project $project){

        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project has been Deleted');
    }
}
