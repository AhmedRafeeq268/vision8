<?php
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site1Controller;
use App\Http\Controllers\Site2Controller;
use App\Http\Controllers\Site3Controller;

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

//Route::get('/SiteController',[SiteController::class, 'index'])->name('home');

Route::get('/',[SiteController::class, 'index'])->name('index');
Route::get('/about',[SiteController::class, 'about'])->name('about');
Route::get('/contact',[SiteController::class, 'contact'])->name('contact');
Route::get('/user/{id}',[SiteController::class, 'user'])->name('user');

Route::get('/index',[AdminController::class,'index'])->name('index');
Route::get('/product',[AdminController::class,'product'])->name('product');

Route::prefix('customers')->name('customers.')->group(function (){
    Route::get('/',[CustomersController::class,'index'])->name('index');
    Route::get('/profile',[CustomersController::class,'profile'])->name('profile');
});

Route::get('site1/new/test',[Site1Controller::class,'index'])->name('site1');

Route::prefix('site2')->name('site2.')->group(function(){
    Route::get('/',[Site2Controller::class,'index'] )->name('index');
    Route::get('/about',[Site2Controller::class,'about'] )->name('about');
    Route::get('/contact',[Site2Controller::class,'contact'] )->name('contact');
    Route::get('/post',[Site2Controller::class,'post'] )->name('post');
});

Route::prefix('site3')->name('site3.')->group(function (){
   Route::get('/',[Site3Controller::class,'index'])->name('index');
   Route::get('/experience',[Site3Controller::class,'experience'])->name('experience');
   Route::get('/education',[Site3Controller::class,'education'])->name('education');
   Route::get('/skills',[Site3Controller::class,'skills'])->name('skills');
   Route::get('/interests',[Site3Controller::class,'interests'])->name('interests');
   Route::get('/awards',[Site3Controller::class,'awards'])->name('awards');
});
