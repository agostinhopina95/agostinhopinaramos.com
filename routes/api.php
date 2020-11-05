<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('contact_me_form', function(Request $request){

    $_token = $request->input('_token');
    $name = $request->input('name');
    $email = $request->input('email');
    $message = $request->input('message');

    $object = [
        "_token" => $_token,
        "name" => $name,
        "email" => $email,
        "message" => $message,
    ];

    if(send_email($object)){
        return 'Message send success!';
    }

    return 'Error, please try again!';
});