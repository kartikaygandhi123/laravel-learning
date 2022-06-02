<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class HttpController extends Controller
{
    //

    function http()
    {


        $collection = Http::get("https://datausa.io/api/data?drilldowns=Nation&measures=Population");
        return view("http", ['collection' => $collection['data']]);
    }
}
