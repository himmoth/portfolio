<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Language;
use App\Http\Controllers\Controller;

class LanguagesController extends Controller
{
    public function index(){
        $languages = Language::latest()->get();
        return view('admin.languages.index',['languages'=> $languages]);
    }
    public function create(){

        return view('admin.languages.create');
    }

    public function store(Request $request, Language $language){
        // dd($request->all());
        $formFields = $request->validate([
            'language'=>'required',
            'percent'=>'required|min:1|max:100',
        ]);
    
        $language->create($formFields);
        return redirect()->route('languages.index')->with('success', 'Language has been created' );
    }

    public function edit(Language $language){

        return view('admin.languages.edit',['language'=> $language ]);

    }
    public function update(Request $request, Language $language){
        $formFields = $request->validate([
            'language'=>'required',
            'percent'=>'required',
        ]);
  
        $language->update($formFields);
        return redirect()->route('languages.index')->with('success', 'Language has been updated' );

    }

    public function destroy(Language $language){
        $language->delete();
        return redirect()->route('languages.index')->with('success', 'Language has been deleted' );
    }
}
