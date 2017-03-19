<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vr360Controller extends Controller
{
    //
    public function index()
    {
        return Mail::to('marouanesouah@gmail.com')->send(new mailVR360());
    }
}
