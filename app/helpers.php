<?php

function return_path($path){
    $new = "";
    $count = count(explode("/", $path))-1;
    for($i=0;$i<$count;$i++){
        $new .= "/..";
    }
    return $new;
}

function send_email($object){

    // $object = [
    //     "name" => "Agostinho Ramos",
    //     "message" => "This is it!!!!",
    //     "email" => "agostinhopina095@gmail.com",
    // ];

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
    $message = '<html><body>';
    $message .= '<h3>Dear, Agostinho Ramos</h3>';
    $message .= '<p>I am ' . $object["name"] . ',<br/><br/> ' . $object["message"] . '<br/><br/><i>' . $object["mail"] . '</i></p>';
    $message .= '</body></html>';

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        return True;
    } 
    
    return False;
}