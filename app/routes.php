<?php

use Start\Facades\Route;
use Start\Http\{Request, Response};

Route::get('/', function(Request $request): Response
{
    return view('index');
});

Route::get('/controller', 'IndexController@main');

Route::controller('/test', 'TestController');
