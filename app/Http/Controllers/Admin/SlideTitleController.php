<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SlideTitle;
use Illuminate\Http\Request;

class SlideTitleController extends Controller
{
    public function index(){
        $slidetitles = SlideTitle::all();
        return view('admin.slidetitle.index',[
            'slidetitles' => $slidetitles,
        ]);
    }
    public function create(){
        return view('admin.slidetitle.create');
    }
    public function store(Request $request,SlideTitle $slidetitle ){
        $formFields = $request->validate([
        'name'=> 'required|min:2',
        'position'=> 'required',
        ]);
        $slidetitle->create($formFields);
        return redirect()->route('slide.index')->with('success', 'Slide title has been created');
    }
    public function edit(SlideTitle $slidetitle){
        return view('admin.slidetitle.edit',['slidetitle'=> $slidetitle]);
    }
    public function update(Request $request,SlideTitle $slidetitle ){
        $formFields = $request->validate([
        'name'=> 'required',
        'position'=> 'required',
        ]);
        $slidetitle->update($formFields);
        return redirect()->route('slide.index')->with('success', 'Slide title has been updated');
    }
    public function destroy(SlideTitle $slidetitle){
        $slidetitle->delete();
        return redirect()->route('slide.index')->with('success', 'Slide title has been deleted' );
    }
}
