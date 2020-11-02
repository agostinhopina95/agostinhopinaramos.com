<?php

$ftp_server = "ftp.agostinhopinaramos.com";
$ftp_user_name = "general@goodshapecode.com";
$ftp_user_pass = "{l4o5*T5Y7HH#7T^8F7Jh{7";
$file_identity = "/" . "agostinhopinaramos.com" . ".zip";
$file = "." . $file_identity;
$remote_folder = "/public_html";

set_time_limit(999);

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// upload a file
if (ftp_put($conn_id, $remote_folder . $file_identity, $file)) {
    echo "successfully uploaded $file_identity\n";
    $method_url =
        "https://agostinhopinaramos.com/_tools/unzip.php?token=8F934UT98HU9IERNUIV78ERUIVNERHUVI" .
        "&from=" . $remote_folder . $file_identity . "&to=" . $remote_folder;
    $script = '<script>
        setTimeout(() => {
            (function() {
                function httpGet(theUrl) {
                    var xmlHttp = new XMLHttpRequest();
                    xmlHttp.open("GET", theUrl, false); // false for synchronous request
                    xmlHttp.send(null);
                    return xmlHttp.responseText;
                }
                httpGet("' . $method_url . '");
            })();
        }, 100);
    </script>';
    echo $script;
    exit;
} else {
    echo "There was a problem while uploading $file_identity\n";
    exit;
}
// close the connection
ftp_close($conn_id);
