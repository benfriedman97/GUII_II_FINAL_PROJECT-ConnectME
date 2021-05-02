<?php

session_start();

date_default_timezone_set('America/New_York');

define("DB_SERVER"  , "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", NULL);
define("DB_NAME"    , "userdb");

// https://www.codegrepper.com/code-examples/php/console.log+in+php
// consoleLog for PHP, credit to @Kaotik 03/07/2020 & @0nline 06/10/2020
function consoleLog($msg) {
    echo '<script type="text/javascript">console.log(' 
        . str_replace('<', '\\x3C', json_encode($msg)) 
        . ');</script>
    ';
}

// https://www.w3schools.com/php/php_form_validation.asp
// form validation, used to sanitize user input
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function systemLog($msg) {
    $fp = fopen("../res/logs/log.txt","a+");
    $timestamp = "[" . date("Y-m-d H:i:s") . "] ";
    fwrite($fp, $timestamp . $msg . "\n");
    fclose($fp);
}

// auto login if cookie is set
if (isset($_COOKIE["auto-login"]) && !isset($_SESSION["signed-in"])) {

    // retrieve cookie
    $cookieArray = explode("/", $_COOKIE["auto-login"]);

    // decrypt information
    $email_decrypted    = openssl_decrypt(  $cookieArray[0], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $password_decrypted = openssl_decrypt(  $cookieArray[1], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $name_decrypted     = openssl_decrypt(  $cookieArray[2], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    // assign session variables
    $_SESSION["current-user-email"]      = $email_decrypted   ;
    $_SESSION["current-user-password"]   = $password_decrypted;
    $_SESSION["current-user-first-name"] = $name_decrypted    ;
    $_SESSION["signed-in"] = true;

    systemLog($_SESSION["current-user-email"] . " signed in from IP address " . $_SERVER['REMOTE_ADDR'] . " via cookie");

}

foreach ($_SERVER as $key=>$val) { consoleLog($key . " " . $val); }

include '../res/scripts/ads.php';

?>