<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;
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
    Route::get('/signup', function () {
        return view('signup');
    });
    
    Route::post('afterLogin', [loginController::class, 'handleSubmission']);

    
Route::view("noaccess", "noaccess");

Route::group(['middleware' => ['protectedPages']], function(){
    Route::view("login", "login");
    Route::get('/', function () {
        // This is a global view helper
        return view('dashboard', ['names' => ['Talha Imran','Hamza Imran','Hassaan Farouqui']]);
    });
});