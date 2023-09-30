<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Skill;
use App\Models\Admin\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return view('admin.subjects.index',[
            'subjects' => $subjects,
        ]);
    }
    public function create(){
        $skills = Skill::all();
        return view('admin.subjects.create',['skills'=>$skills]);
    }
    public function store(Request $request,Subject $subject ){
        $formFields = $request->validate([
        'title'=> 'required|min:2',
        'skill_id'=> 'required',
        'percent'=> 'required',
        ]);
        $formFields['skill_id'] = $request->skill_id;
        $subject->create($formFields);
        return redirect()->route('subjects.index')->with('success', 'Subjects has been created');
    }

    public function edit(Subject $subject){
        $skills = Skill::all();
        return view('admin.subjects.edit',
        [
            'subject'=> $subject,
            'skills'=> $skills,

        ]);
    }

    public function update(Request $request,Subject $subject){
        $formFields = $request->validate([
            'title'=> 'required',
            'percent'=> 'required',
        ]);

        $formFields['skill_id'] = $request->skill_id;
        $subject->update($formFields);
        return redirect()->route('subjects.index')->with('success', 'Subject
         has been updated');
    }

    public function destroy(Subject $subject){
        $subject->delete();
        return redirect()->route('subjects.index')->with('success', 'Subject has been deleted' );
    }
}
