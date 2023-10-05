<?php
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('users',function (){return 'admin users';})->name('users');
    Route::get('posts',function (){return 'admin posts';})->name('posts');
    Route::get('comments',function (){return 'admin comments';})->name('comments');
    Route::get('orders',function (){return 'admin orders';})->name('orders');
    Route::get('payment',function (){return 'admin payment';})->name('payment');
});
