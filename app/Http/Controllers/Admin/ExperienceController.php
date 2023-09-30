<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(){
        $experiences = Experience::latest()->get();
        return view('admin.experiences.index',['experiences'=> $experiences]);
    }
    public function create(){

        return view('admin.experiences.create');
    }

    public function store(Request $request, Experience $experience){
        // dd($request->all());
        $formFields = $request->validate([
            'year'=>'required',
            'company'=>'required',
            'technology'=>'required',
            'position'=>'required',
            'language'=>'required',

        ]);
    
        $experience->create($formFields);
        return redirect()->route('experiences.index')->with('success', 'Experience has been created' );
    }

    public function edit(Experience $experience){

        return view('admin.experiences.edit',['experience'=> $experience ]);

    }
    public function update(Request $request, Experience $experience){
        $formFields = $request->validate([
            'year'=>'required',
            'company'=>'required',
            'technology'=>'required',
            'position'=>'required',
            'language'=>'required',

        ]);

        $experience->update($formFields);
        return redirect()->route('experiences.index')->with('success', 'Experience has been updated' );

    }

    public function destroy(Experience $experience){
        $experience->delete();
        return redirect()->route('experiences.index')->with('success', 'Experience has been deleted' );

    }
}
