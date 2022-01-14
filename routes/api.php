<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\UpvoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('/posts',  'Api\PostsController');
Route::apiResource('/comments',  'Api\CommentController');
Route::apiResource('/votes/{id}',  'Api\UpvoteController');


