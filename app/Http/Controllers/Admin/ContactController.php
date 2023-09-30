<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
    public function index(){
        $contacts = Contact::latest()->get();
        return view('admin.contacts.index',['contacts' => $contacts]);
    }

    public function store(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
       
       return back()->with('message', 'Thank you for contact to me!');

    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact has been deleted');

    }
}
