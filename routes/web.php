<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/login', function () {
    //     return view('login');
    // });
    // Route::get('/signup', function () {
    //     return view('signup');
    // });
    
    Route::post('afterLogin', [loginController::class, 'handleSubmission']);

    
Route::view("noaccess", "noaccess");

Route::group(['middleware' => ['protectedPages']], function(){
    // Route::view("login", "login");

    Route::get("login", function(){
        if(session()->has('user_name')){
            return redirect("/");
        }

        return view('login');
    });

    Route::get('/', function () {
        // This is a global view helper

        if(session()->has("user_name")){
            return view('dashboard');
        }
        else{
            return redirect('login');
        }
        
    });
});

Route::view("signup", "signup")->middleware('userauth');

Route::get('users', [userController::class, 'getAllUsers']);


Route::get('api/users', [userController::class, 'getDataThroughAPI']);

Route::get("/logout", function(){
    if(session()->has('user_name')){
        session()->pull('user_name');
        return redirect('login');
    }
});
Route::post('login', [loginController::class, "login"]);