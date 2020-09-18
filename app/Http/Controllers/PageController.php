<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //Controls the Pages of the Website
    //@author Christopher Robin Chase

    public function index()
    {
        $title = "Welcome to Eyevent";
        return view('pages.index')->with('title',$title);
    }
}
