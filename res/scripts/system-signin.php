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
    $email_encrypted    = openssl_encrypt(  $_SESSION["current-user-email"]     , 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $password_encrypted = openssl_encrypt(  $_SESSION["current-user-password"]  , 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $user_id_encrypted     = openssl_encrypt(  $_SESSION["current-user-user-id"], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    // set cookie
    setcookie("auto-login", 
        $email_encrypted . "/" . 
        $password_encrypted . "/" . 
        $user_id_encrypted, 
        time() + 86400, "/", "", 0);

    systemLog("set auto-login cookie for " . $_SESSION["current-user-email"] . " at IP address " . $_SERVER['REMOTE_ADDR']);

}

// get post-signout redirect link
$link = 'http://' . $_SERVER["HTTP_HOST"] . 
        base64_decode(str_pad(strtr($_GET["from"], '-_', '+/'), 
        strlen($_GET["from"]) % 4, '=', STR_PAD_RIGHT));

// redirect to link
echo '<script>window.location.replace("' . $link . '");</script>';
?>

</html>