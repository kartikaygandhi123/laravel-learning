<?php

use App\Http\Controllers\AddMember;
use App\Http\Controllers\ApiDataController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\User1Controller;
use App\Http\Controllers\UserAuth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\UserController1;


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

Route::get('/', function () {

   return view('home');
});


Route::view("noaccess", "noaccess");



Route::view("login", 'login');



Route::post('submit', [UsersController::class, 'getData']);

Route::view("users", "users")->middleware('protectedPage');



Route::get('user1', [UserController1::class, 'index']);


Route::get('database', [DatabaseController::class, 'getData']);


// Route::group(['middleware'=>['protectedPage']],function()
// {

// });



Route::get("http", [HttpController::class, 'http']);

Route::get("apidata", [ApiDataController::class, 'apiData']);




Route::view("user1", 'user1');
Route::get('user1submit', [User1Controller::class, 'index']);
// Route::view("loginsession","loginsession");
Route::post("userauth", [UserAuth::class, 'userLogin']);
Route::view("profile", 'profile');

Route::get("/logout", function () {
   if (session()->has('user')) {
      session()->pull('user');
   }
   return redirect('loginsession');
});

Route::get("/loginsession", function () {
   if (session()->has('user')) {
      return redirect('profile');
   }
   return view('loginsession');
});

Route::view("add", "add");
Route::post("addmember", [AddMember::class, 'add']);

Route::view("upload", "upload");
Route::post("upload", [UploadController::class, 'index']);

Route::view("profilelanguage", 'profilelanguage');
// Route::get("/profilelanguage/{lang}", function ($lang) {
//    App::setlocale('$lang');
//    return view("profilelanguage");
// });
