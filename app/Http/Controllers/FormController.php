<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(Request $request){

        $firstName = $request->input('fname');
        $lastName = $request->input('lname');

        return "First Name: $firstName" .   " <br> "   ." Last Name: $lastName";
    }
}