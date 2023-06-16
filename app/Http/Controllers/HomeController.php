<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function edit()
    // {
    //     return 'Working from Home controller';
    // }

    public function create()
    {
        $registration =  \App\Models\Registration::create([
            'name' => 'ABC',
            'email'=>'abc@gmail.com',
            'gender'=>'M',
            'address'=>'Delhi',
            'dob'=>'1995-09-28',
            'password'=>'pqr'
            

            
            
        ]);

        return $registration;
    }

    public function show($id)
    {
        $registration = \App\Models\Registration::find($id);

        return $registration;
    }

    public function edit($id)
    {
        $registration = \App\Models\Registration::find($id);
        $registration->name='DEF';
        $registration->email='def@gmail.com';
        $registration->gender='M';
        $registration->address='Punjab';
        $registration->dob='1996-02-02';
        $registration->password='mno';
        $registration->save();
        return $registration;
    }

    public function delete($id)
    {
        $registration = \App\Models\Registration::find($id);

        $registration->delete();

        return 'registration deleted';
    }
}
