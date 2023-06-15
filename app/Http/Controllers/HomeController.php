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
        $customers =  \App\Models\Customer::create([
            'name' => 'Faraz Ali Khan',
            'email'=>'farazmsi2014@gmail.com',
            'gender'=>'M',
            'address'=>'I 42 A Abul Fazal Enclave Jamia Nagar',
            'dob'=>'1995-09-28',
            'password'=>'pqr'
            

            
            
        ]);

        return $customers;
    }

    public function show($id)
    {
        $customers = \App\Models\Customer::find($id);

        return $customers;
    }

    public function edit($id)
    {
        $customers = \App\Models\Customer::find($id);
        $customers->name='Bhavjot Singh';
        $customers->email='xyz@gmail.com';
        $customers->gender='M';
        $customers->address='XYZ';
        $customers->dob='1996-02-02';
        $customers->password='mno';
        $customers->save();
        return $customers;
    }

    public function delete($id)
    {
        $customers = \App\Models\Customer::find($id);

        $customers->delete();

        return 'customer deleted';
    }
}
