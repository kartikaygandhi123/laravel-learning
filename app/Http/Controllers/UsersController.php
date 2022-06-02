<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getData(Request $req) 
    {

$req->validate(['username'=>'required',
                'userpassword'=>'required|min:5']);


                // dump($req->get('username'));

return $req->input();



                 // dd($req->all());
    }
}
