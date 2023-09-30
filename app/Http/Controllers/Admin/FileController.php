<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    public function index(){
        $files = File::all();
        return view('admin.files.index', ['files' => $files]);
    }

    public function create(){

        return view('admin.files.create');
    }

    public function store(Request $request, File $file){

        $formFields = $request->validate([
            'cv' => 'required|mimes:pdf,docx|max:10000',
            'resume' => 'mimes:pdf,docx|max:10000',
        ]);

        $formFields['cv'] = $request->file('cv')->store('cv','public');
        if($request->hasFile('resume')){
            $formFields['resume'] = $request->file('resume')->store('resume','public');
        }

        $file->create($formFields);

        return redirect()->route('files.index')->with('success', 'File has been created ');

        
    }

    public function edit(File $file){

        return view('admin.files.edit',['file'=> $file]);
    }

    public function update(Request $request, File $file){

        if($request->hasFile('cv')){
            $formFields['cv'] = $request->file('cv')->store('cv','public');
        }
       
        if($request->hasFile('resume')){
            $formFields['resume'] = $request->file('resume')->store('resume','public');
        }

        $file->create($formFields);

        return redirect()->route('files.index')->with('success', 'File has been Update ');

        
    }

    public function destroy(File $file){

        $file->delete();
        return redirect()->route('files.index')->with('success', 'File has been Deleted ');

    }

    public function download(){

        return Storage::download('moth.docx');
    }

  
  
}
