<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $post =10;
    $comment=20;
    $url = route('userinfo',[$post,$comment]);
    return 'to show the comment of user post please go to the url '.$url;
});


Route::get('/user/{name?}/{age?}',function ($name=null , $age=null){
    return 'welcome ' . $name . '  your age is '. $age;
})->whereAlpha('name')->whereNumber('age');


Route::get('/user/posts/{postid}/mycomments/{commentid}/show',function ($postid,$commentid){
    return "user post $postid comment $commentid";
})->name('userinfo');

Route::get('/SiteController',[SiteController::class, 'index'])->name('home');


