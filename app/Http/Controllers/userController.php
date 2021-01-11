<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    function getAllUsers(){
        return User::all();
    }
}