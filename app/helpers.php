<?php

function return_path($path){
    $new = "";
    $count = count(explode("/", $path))-1;
    for($i=0;$i<$count;$i++){
        $new .= "/..";
    }
    return $new;
}