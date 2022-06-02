<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiDataController extends Controller
{
    //
    function apiData()
    {

        $data = Http::get('https://www.boredapi.com/api/activity');
        return view("apidata", ['data' => $data]);
    }
}
