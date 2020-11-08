<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\ClientMail;

function return_path($path){
    $new = "";
    $count = count(explode("/", $path))-1;
    for($i=0;$i<$count;$i++){
        $new .= "/..";
    }
    return $new;
}

function send_email($object){

    Mail::to($object["email"])->send(new ClientMail([
        "name" => $object["name"],
        "message" => $object["message"],
        "email" => $object["email"]
    ]));
    
    return True;
}