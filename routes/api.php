<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\UpvoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::apiResource('/posts',  'Api\PostsController');
// Route::apiResource('/comments',  'Api\CommentController');
// Route::apiResource('/upvote',  'Api\UpvoteController');


// APPLICATION ENDPOINTS
// Route::get('/home/slider',[HomeController::class,'HomeSlider'])->name('home.slider');

Route::post('store/posts','Api\PostsController@store')->name('posts.store');
Route::get('show/posts','Api\PostsController@index')->name('posts.index');
Route::get('show/posts/{post}','Api\PostsController@show')->name('posts.show');
Route::get('delete/posts/{post}','Api\PostsController@destroy')->name('posts.destroy');
Route::post('update/posts/{post}','Api\PostsController@update')->name('posts.update');





// ENDPOINTS FOR COMMENTS
Route::post('store/comments','Api\CommentController@store')->name('comments.store');
Route::get('show/comments','Api\CommentController@index')->name('comments.index');
Route::get('show/comments/{comment}','Api\CommentController@show')->name('comments.show');
Route::get('delete/comments /{comment}','Api\CommentController@destroy')->name('comments.destroy');
Route::post('update/comments/{comment}','Api\CommentController@update')->name('comments.update');
