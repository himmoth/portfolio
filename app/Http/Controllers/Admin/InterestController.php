<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index(){
        $interests = Interest::latest()->get();
        return view('admin.interests.index',['interests'=> $interests]);
    }
    public function create(){

        return view('admin.interests.create');
    }

    public function store(Request $request, Interest $interest){
        // dd($request->all());
        $formFields = $request->validate([
            'interest'=>'required',
            'icon' => 'required|mimes:png,jpeg,jpg',
        ]);
        if($request->hasFile('icon')){
            $formFields['icon'] = $request->file('icon')->store('interests','public');
        }
    
        
        $interest->create($formFields);
        return redirect()->route('interests.index')->with('success', 'Interest has been created' );
    }

    public function edit(Interest $interest){

        return view('admin.interests.edit',['interest'=> $interest]);

    }
    public function update(Request $request, Interest $interest){
        $formFields = $request->validate([
            'interest'=>'required',
        ]);

        $interest->update($formFields);
        return redirect()->route('interests.index')->with('success', 'Interest has been updated' );

    }

    public function destroy(Interest $interest){
        $interest->delete();
        return redirect()->route('interests.index')->with('success', 'Interest has been deleted' );

    }
}
