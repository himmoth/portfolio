<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(){
        $educations = Education::latest()->get();
        return view('admin.educations.index',['educations'=> $educations]);
    }
    public function create(){

        return view('admin.educations.create');
    }

    public function store(Request $request, Education $education){
        // dd($request->all());
        $formFields = $request->validate([
            'year'=>'required',
            'school'=>'required',
        ]);
    
        if($request->input('bachelor')){
            $formFields['bachelor'] = $request->input('bachelor');
        }
        $education->create($formFields);
        return redirect()->route('educations.index')->with('success', 'Education has been created' );
    }

    public function edit(Education $education){

        return view('admin.educations.edit',['education'=> $education ]);

    }
    public function update(Request $request, Education $education){
        $formFields = $request->validate([
            'year'=>'required',
            'school'=>'required',
        ]);

        if($request->input('bachelor')){
            $formFields['bachelor'] = $request->input('bachelor');
        }
        $education->update($formFields);
        return redirect()->route('educations.index')->with('success', 'Education has been updated' );

    }

    public function destroy(Education $education){
        $education->delete();
        return redirect()->route('educations.index')->with('success', 'Education has been deleted' );

    }
}
