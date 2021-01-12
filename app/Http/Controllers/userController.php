<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
class userController extends Controller
{
    function getAllUsers(){
        $data = User::paginate(5);

        return view('displayUsers', ['data' => $data]);
    }


    function getDataThroughAPI(){
        $data = Http::get("https://reqres.in/api/users");

        return view("display")->with('users', $data["data"]);
    }

    function saveData(Request $request){
        $user = new User();

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('users');
    }


    function deleteUser($id){
        User::find($id)->delete();

        return redirect('users');
    }


    function editUser($id){
        $user = User::find($id);

        return view('updateUser', ['user' => $user]);
        // return $user;
    }

    function updateUser(Request $req, $id){
        User::where('id',$id) ->update(['name' => $req->username, 'email' => $req->email, 'password' => $req->password]);
        return redirect('users');
    }




}