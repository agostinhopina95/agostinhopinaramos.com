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

    $object = [
        "name" => "Agostinho Ramos",
        "message" => "This is it!!!!",
        "email" => "agostinhopina095@gmail.com",
    ];

    // $html_message = new ClientMail([
    //     "name" => $object["name"],
    //     "message" => $object["message"],
    //     "email" => $object["email"]
    // ]);

    $html_message = "Tigfnsdff sgiufdsg fdsgdfjsg ";

    $to = 'agostinhopina095@gmail.com';
    $subject = 'Hello world!!!';
    $from = 'general@agostinhopinaramos.com';

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: ' . $from . "\r\n" .
    'Reply-To: ' . $from . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    $message = $html_message;

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        return True;
    } 
    
    return False;
}