<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use GuzzleHttp\Client;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     $client = new Client(); //GuzzleHttp\Client
//     $url = "http://127.0.0.1:8000/api/posts";
//     $response = $client->request('GET', $url, [
//         'verify'  => false,
//     ]);
//     $responseBody = json_decode($response->getBody());
//     return view('pages.index',compact('responseBody'));
// });

