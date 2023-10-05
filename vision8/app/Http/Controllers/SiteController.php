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
    return 'index page';
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
