<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Link extends Controller
{
    public function helloworld()
    {
        return view('blog');
    }
}


