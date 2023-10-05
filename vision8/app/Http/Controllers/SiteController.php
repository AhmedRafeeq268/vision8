<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
//    public function index(){
//        return 'Home page';
//    }
//    public function about(){
//        return 'about page';
//    }
//    public function contact(){
//        return 'contact page';
//    }
//    public function user($id){
//        return 'Home page';
//    }


public function index(){
    $name = 'ali';
    $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, natus.';
//    return view('test')->with('name',$name)->with('text',$text);
    return view('test',compact('name','text'));
}
public function about(){
    return 'about page';
}
public function contact(){
    return 'contact page';
}

public function user($id){
    return 'user page ' .$id;
}

}
