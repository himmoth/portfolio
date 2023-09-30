<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $profiles = Profile::latest()->get();
        return view('admin.profiles.index',['profiles'=> $profiles]);
    }
    public function create(){

        return view('admin.profiles.create');
    }

    public function store(Request $request, Profile $profile){
        // dd($request->all());
        $formFields = $request->validate([
            'name'=>'required|min:3',
            'position'=>'required',
            'profile' => 'required|mimes:png,jpeg,jpg',
        ]);

        $formFields['profile'] = $request->file('profile')->store('profiles','public');

        $profile->create($formFields);
        return redirect()->route('profiles.index')->with('success', 'Profile has been created' );
    }

    public function edit(Profile $profile){

        return view('admin.profiles.edit',['profile'=> $profile]);

    }
    public function update(Request $request, Profile $profile){
        $formFields = $request->validate([
            'name'=>'required',
            'position'=>'required',
        ]);

        if($request->hasFile('profiles')){
            $formFields['profile'] = $request->file('profile')->store('profiles','public');
        }
        $profile->update($formFields);
        return redirect()->route('profiles.index')->with('success', 'Profile has been updated' );

    }

    public function destroy(Profile $profile){
        $profile->delete();
        return redirect()->route('profiles.index')->with('success', 'Profile has been deleted' );

    }

}
