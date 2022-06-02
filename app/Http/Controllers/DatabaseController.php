<?php

namespace App\Http\Controllers;

use App\Models\Database;
use Illuminate\Http\Request;


class DatabaseController extends Controller
{
    //

function getData(){


    return Database::all();

}
}
