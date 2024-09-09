<?php

namespace App\Http\Controllers;

use App\Models\Contancts;

use Illuminate\Http\Request;

class ContactController extends Controller
{
//    save messages
    public function store(Request $request)
    {

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required'
        ]);


        $contact = new Contancts();
        $contact->fill($validatedData);


        $contact->save();


        return redirect()->back()->with('success', 'Message sent successfully!');


    }

    public function show_messages(){

        $messages = Contancts::all();

        return view('admin.messages', compact('messages'));
    }
}
