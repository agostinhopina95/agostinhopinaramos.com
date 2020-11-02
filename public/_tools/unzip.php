<?php
    define("ROOT_PATH", "/home3/gshapecode/");
    
    if( $_GET["token"] == "8F934UT98HU9IERNUIV78ERUIVNERHUVI" ){
        $from = $_GET['from'];
        $to = $_GET['to'];
        if (isset($from) && isset($to)) {
            $zip = new ZipArchive;
            $res = $zip->open(ROOT_PATH . $from);
            if ($res === TRUE) {
                $zip->extractTo(ROOT_PATH . $to);
                $zip->close();
                unlink(ROOT_PATH . $from);
                echo 'Unzip with success!';
            } else {
                echo 'Error!';
            }
            exit(0);
        }
    }
