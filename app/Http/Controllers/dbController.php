<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dbController extends Controller
{
    function db(){

        // To display all names of the users in the dataase
        // $data =  DB::table('users')->get();
        // foreach($data as $emp){
        //     echo($emp->name)."<br/>";
        // }

        // To display individual fields of a user in the dataase
        // $data =  DB::table('users')->where('name', 'Brad Traversy')->first();
        // foreach($data as $individualField){
        //     echo($individualField)."<br/>";
        // }

        // To get a specific value of a specific user
        // $value = Db::table('users')->where('name', 'Hamza')->value('password');
        // echo($value);

        // To get a specific column as a list
        // $list = Db::table('users')->pluck('name', 'id');
        // foreach($list as $key => $item){
        //     echo($item)." ";
        //     echo($key)."<br/>";
        // };

        // Let's get data as a chunk

        DB::table('users')->orderBy('id')->chunk(5, function($user){
            foreach($user as $item){
                echo($item->name)."<br/>";
            }

            return false;
            // echo($user->id);
            // echo(" ");
            // echo($user->name);
            // echo(" ");
            // echo($user->email);
            // echo(" ");
            // echo($user->password);
            // echo(" ");
            // echo("<br/>");
            // echo("<br/>");
        });
    }
}