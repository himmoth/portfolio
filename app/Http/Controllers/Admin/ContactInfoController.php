<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\ContactInfo;
use Illuminate\Http\Request;

class ContactInfoController extends Controller
{
    public function index(){
        $contactinfos = ContactInfo::latest()->get();
        return view('admin.contactinfos.index',['contactinfos'=> $contactinfos]);
    }
    public function create(){

        return view('admin.contactinfos.create');
    }

    public function store(Request $request, ContactInfo $contactinfo){
        // dd($request->all());
        $formFields = $request->validate([
            'name'=>'required|min:3',
            'icon' => 'required|mimes:png,jpeg,jpg',
        ]);
        if($request->hasFile('icon')){
            $formFields['icon'] = $request->file('icon')->store('icons','public');
        }
    
        $formFields['url'] = $request->input('url');
        $contactinfo->create($formFields);
        return redirect()->route('contactinfos.index')->with('success', 'Contactinfo has been created' );
    }

    public function edit(ContactInfo $contactinfo){

        return view('admin.contactinfos.edit',['contactinfo'=> $contactinfo]);

    }
    public function update(Request $request, ContactInfo $contactinfo){
        $formFields = $request->validate([
            'name'=>'required',
            'url'=>'required',
        ]);

        if($request->hasFile('icon')){
            $formFields['icon'] = $request->file('icon')->store('icons','public');
        }
        $contactinfo->update($formFields);
        return redirect()->route('contactinfos.index')->with('success', 'Contactinfo has been updated' );

    }

    public function destroy(ContactInfo $contactinfo){
        $contactinfo->delete();
        return redirect()->route('contactinfos.index')->with('success', 'Profile has been deleted' );

    }
}
