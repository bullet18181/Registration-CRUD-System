<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $registration= new \App\registration;
        $registration->first_name=$request->get('first_name');
        $registration->last_name=$request->get('last_name');
        $registration->email=$request->get('email');
        $registration->age=$request->get('age');
        $registration->save();

        return redirect('registration')->with('success', 'User has been added');
    }

    public function index()
    {
        $registration=\App\registration::all();
        return view('registrationindex',compact('registration'));
    }

    public function edit($id)
    {
        $registration = \App\registration::find($id);
        return view('registrationedit',compact('registration','id'));
    }

    public function update(Request $request, $id)
    {
        $registration= \App\registration::find($id);
        $registration->first_name=$request->get('first_name');
        $registration->last_name=$request->get('last_name');
        $registration->email=$request->get('email');
        $registration->age=$request->get('age');
        $registration->save();
        return redirect('registration')->with('success', 'User has been updated');
    }

    public function destroy($id)
    {
        $registration = \App\registration::find($id);
        $registration->delete();
        return redirect('registration')->with('success','User has been deleted');
    }


}
