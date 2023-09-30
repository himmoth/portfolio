<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::latest()->get();
        return view('admin.users.index',['users' => $users]);
    }

    public function create(){

        return view('admin.users.create');
    }

    public function store(Request $request, User $user){

        $formFields = $request->validate([
           
            'name' => 'required',
            'email' => 'required|email',Rule::unique('users','email'),
            'user' => 'required|mimes:png,jpeg,jpg',
            'password' => 'required|confirmed|min:6',

        ]);

        $formFields['password'] = Hash::make($formFields['password']);
        $formFields['user'] = $request->file('user')->store('users','public');

       $user = $user->create($formFields);

    //    Login 
         auth()->login($user);

       return redirect()->route('users.index')->with('success','User has been created');

    }
    public function editProfile(User $user){

        return view('admin.users.edit-profile', ['user' => $user]);
    }

    public function destroy(User $user){

        $user->delete();
       return redirect()->route('users.index')->with('success','User has been Deleted');

    }

  
}
