<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::all();
        return view('admin.skills.index',[
            'skills' => $skills,
        ]);
    }

    public function create(){
        return view('admin.skills.create');
    }
    
    public function store(Request $request,Skill $skill ){
        $formFields = $request->validate([
        'name'=> 'required|min:2',
        'slug'=> 'required',
        ]);
        $skill->create($formFields);
        return redirect()->route('skills.index')->with('success', 'Skill has been created');
    }
    public function edit(Skill $skill){
        return view('admin.skills.edit',['skill'=> $skill]);
    }
    public function update(Request $request,Skill $skill ){
        $formFields = $request->validate([
        'name'=> 'required',
        'slug'=> 'required',
        ]);
        $skill->update($formFields);
        return redirect()->route('skills.index')->with('success', 'Skill  has been updated');
    }
    public function destroy(Skill $skill ){
        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Skill has been deleted' );
    }
}
