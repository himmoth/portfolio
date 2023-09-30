<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
    $abouts = About::all();
        return view('admin.abouts.index',['abouts' => $abouts]);
    }
    public function create(){

        return view('admin.abouts.create');

    }
    
    public function store(Request $request, About $about){
        $formFields = $request->validate([
            'name'=>'required|min:3',
            'description'=>'required',
            'img' => 'required|mimes:png,jpeg,jpg',
            'bgimg' => 'required|mimes:png,jpeg,jpg',
        ]);

        $formFields['img'] = $request->file('img')->store('img','public');
        $formFields['bgimg'] = $request->file('bgimg')->store('bgimg','public');

        $about->create($formFields);
        return redirect()->route('abouts.index')->with('success', 'About has been created' );

    }
    public function edit(About $about){

        return view('admin.abouts.edit',['about'=> $about]);

    }
    public function update(Request $request, About $about){
        $formFields = $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);

        if($request->hasFile('img')){
            $formFields['img'] = $request->file('img')->store('img','public');
        }
        if($request->hasFile('bgimg')){
            $formFields['bgimg'] = $request->file('bgimg')->store('bgimg','public');
        }

        $about->update($formFields);
        return redirect()->route('abouts.index')->with('success', 'About has been updated' );

    }

    public function destroy(About $about){
        $about->delete();
        return redirect()->route('abouts.index')->with('success', 'About has been deleted' );

    }

}
