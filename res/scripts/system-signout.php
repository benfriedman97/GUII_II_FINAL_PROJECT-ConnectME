<?php session_start(); ?>

<DOCTYPE! html>

<?php

date_default_timezone_set('GMT');
function systemLog($msg) {
    $fp = fopen("../logs/log.txt","a+");
    $timestamp = "[" . date("Y-m-d H:i:s") . "] ";
    fwrite($fp, $timestamp . $msg . "\n");
    fclose($fp);
}

systemLog($_SESSION["current-user-email"] . " signed out");

// unset session variables
unset($_SESSION["current-user-email"]);
unset($_SESSION["current-user-password"]);
unset($_SESSION["current-user-name"]);
$_SESSION["signed-in"] = false;

// get post-signout redirect link
$link = openssl_decrypt($_GET["from"], 
                    "CAMELLIA-128-CBC", 
                    "ConnectME", 0, 
                    "1234567891011121");

// redirect to link
echo '<script>window.location.replace("../..' . $link . '");</script>';

?>

</html>