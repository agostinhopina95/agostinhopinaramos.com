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

    // Mail::to($object["email"])->send(new ClientMail([
    //     "name" => $object["name"],
    //     "message" => $object["message"],
    //     "email" => $object["email"]
    // ]));

    // return True;

    $to = 'agostinhopina095@gmail.com';
    $subject = 'Marriage Proposal';
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
    $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
    $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
    $message .= '</body></html>';

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        return True;
    }
    
    return False;
}