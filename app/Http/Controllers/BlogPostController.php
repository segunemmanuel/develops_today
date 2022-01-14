<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    //

    public function FetchAllPost(){
        // $client = new Client(); //GuzzleHttp\Client
        // $url = "hhttp://127.0.0.1:8000/api/posts";
        // $response = $client->request('GET', $url, [
        //     'verify'  => false,
        // ]);
        // $responseBody = json_decode($response->getBody());
        // return view('pages.index', compact('responseBody'));
    }

}
