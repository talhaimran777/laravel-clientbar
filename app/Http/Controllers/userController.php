<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
class userController extends Controller
{
    function getAllUsers(){
        return User::all();
    }


    function getDataThroughAPI(){
        $data = Http::get("https://reqres.in/api/users");

        return view("display")->with('users', $data["data"]);
    }
}