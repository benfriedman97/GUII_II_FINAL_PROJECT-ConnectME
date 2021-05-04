<?php session_start(); ?>

<DOCTYPE! html>

<?php

date_default_timezone_set('America/New_York');
function systemLog($msg) {
    $fp = fopen("../logs/log.txt","a+");
    $timestamp = "[" . date("Y-m-d H:i:s") . "] ";
    fwrite($fp, $timestamp . $msg . "\n");
    fclose($fp);
}

systemLog($_SESSION["current-user-email"] . " signed out");

// unset session variables
unset($_SESSION["current-user-user-id"])       ;
unset($_SESSION["current-user-first-name"])    ;
unset($_SESSION["current-user-last-name"])     ;
unset($_SESSION["current-user-date-of-birth"]) ;
unset($_SESSION["current-user-address"])       ;
unset($_SESSION["current-user-city"])          ;
unset($_SESSION["current-user-state"])         ;
unset($_SESSION["current-user-account-type"])  ;
unset($_SESSION["current-user-univ-or-comp"])  ;
unset($_SESSION["current-user-email"])         ;
unset($_SESSION["current-user-password"])      ;
unset($_SESSION["current-user-is-verified"])   ;
unset($_SESSION["current-user-interests"])     ;
unset($_SESSION["current-user-validation-key"]);
$_SESSION["signed-in"] = false;

$link = 'http://' . $_SERVER["HTTP_HOST"] . 
        base64_decode(str_pad(strtr($_GET["from"], '-_', '+/'), 
        strlen($_GET["from"]) % 4, '=', STR_PAD_RIGHT));

// redirect to link
echo '<script>window.location.replace("' . $link . '");</script>';

?>

</html>