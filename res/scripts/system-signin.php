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

// set cookie if remember-me is set
if (isset($_SESSION["_remember-me"]) && $_SESSION["_remember-me"] === true &&
    isset($_SESSION["signed-in"]) && $_SESSION["signed-in"] === true) {
        
    $_SESSION["_remember-me"] = false;
    
    // remove old cookie
    if (isset($_COOKIE["auto-login"]))
    {
        setcookie("auto-login", "", time() - 1000, "/", "", 0);
        systemLog("removed auto-login cookie for " . $_SESSION["current-user-email"] . " from IP address " . $_SERVER['REMOTE_ADDR']);
    }

    // encrypt information before sending cookie
    $email_encrypted    = openssl_encrypt(  $_SESSION["current-user-email"]   , 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $password_encrypted = openssl_encrypt(  $_SESSION["current-user-password"], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $name_encrypted     = openssl_encrypt(  $_SESSION["current-user-name"]    , 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    // set cookie
    setcookie("auto-login", 
        $email_encrypted . "/" . 
        $password_encrypted . "/" . 
        $name_encrypted, 
        time() + 86400, "/", "", 0);

    systemLog("set auto-login cookie for " . $_SESSION["current-user-email"] . " at IP address " . $_SERVER['REMOTE_ADDR']);

}

// get post-signin redirect link
$link = openssl_decrypt($_GET["from"], 
                        "CAMELLIA-128-CBC", 
                        "ConnectME", 0, 
                        "1234567891011121");

// redirect to link
echo '<script>window.location.replace("../../..' . $link . '");</script>';
?>

</html>