<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User1Controller extends Controller
{
    //
    function index(Request $req)
    {

return $req->input();

    }
}
