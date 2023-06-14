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
        $result =  \App\Models\result::create([
            'Name' => 'Faraz Ali Khan',
            'Age'=>27,
            'Gender'=>'M',
            'father_name' => 'ABC',
            'Category' => 'Regular',
            'Course' => 'M.Sc in Banking & Financial Analytics',
            'Grade'=>'A',
            'address'=>'I 42 A Abul Fazal Enclave Jamia Nagar'
        ]);

        return $result;
    }

    public function show($id)
    {
        $result = \App\Models\result::find($id);

        return $result;
    }

    public function edit($id)
    {
        $result = \App\Models\result::find($id);
        $result->Name='Bhavjot Singh';
        $result->Age=26;
        $result->Gender='M';
        $result->father_name='XYZ';
        $result->Category='Correspondence';
        $result->Course='MCA';
        $result->Grade='A';
        $result->address='Shiv Park Janakpuri';
        $result->save();
        return $result;
    }

    public function delete($id)
    {
        $result = \App\Models\result::find($id);

        $result->delete();

        return 'result deleted';
    }
}
