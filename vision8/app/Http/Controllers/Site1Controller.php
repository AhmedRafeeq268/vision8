<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site1Controller extends Controller
{
    public function index(){

        $title = 'First Website';

        $desc = 'This is the first website';
        return view('site1.index',compact('title','desc'));
    }
}
