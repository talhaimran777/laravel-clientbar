<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //

    function handleSubmission(Request $req){
        $req->validate([
            'username' => 'required|min:5|max:20',
            'age' => 'required'
        ]);
        
        return $req->input();
    }
}