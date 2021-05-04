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

    // decrypt information from cookie
    $email_decrypted    = openssl_decrypt(  $cookieArray[0], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $password_decrypted = openssl_decrypt(  $cookieArray[1], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $user_id_decrypted  = openssl_decrypt(  $cookieArray[2], 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, 
                                            "1234567891011121");

    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check connection
    if ($connection->connect_error) {     
        consoleLog("Connection failed: " . $connection->connect_error);      
        die();
    }
    consoleLog("Connected successfully\n");

    $sql_statement = $connection->prepare("
        SELECT * 
        FROM user_information 
        WHERE user_id=? AND email=? AND password=?
    ");
    $sql_statement->bind_param("sss", $user_id_decrypted, $email_decrypted, $password_decrypted);

    $sql_statement->execute();

    $sql_statement->store_result();

    $sql_statement->bind_result($result_user_id, 
                                $result_first_name,
                                $result_last_name,
                                $result_date_of_birth,
                                $result_address,
                                $result_city,
                                $result_state,
                                $result_account_type,
                                $result_univ_or_comp,
                                $result_email,
                                $result_password,
                                $result_is_verified,
                                $result_interests,
                                $result_validation_key
                                );
    
    $sql_statement->fetch();

    $sql_statement->free_result();

    $connection->close();

    // assign session variables
    $_SESSION["current-user-user-id"]        = $result_user_id;
    $_SESSION["current-user-first-name"]     = $result_first_name;
    $_SESSION["current-user-last-name"]      = $result_first_name;
    $_SESSION["current-user-date-of-birth"]  = $result_date_of_birth;
    $_SESSION["current-user-address"]        = $result_address;
    $_SESSION["current-user-city"]           = $result_city;
    $_SESSION["current-user-state"]          = $result_state;
    $_SESSION["current-user-account-type"]   = $result_account_type;
    $_SESSION["current-user-univ-or-comp"]   = $result_univ_or_comp;
    $_SESSION["current-user-email"]          = $result_email;
    $_SESSION["current-user-password"]       = $result_password;
    $_SESSION["current-user-is-verified"]    = $result_is_verified;
    $_SESSION["current-user-interests"]      = $result_interests;
    $_SESSION["current-user-validation-key"] = $result_validation_key;
    $_SESSION["signed-in"] = true;

    systemLog($_SESSION["current-user-email"] . " signed in from IP address " . $_SERVER['REMOTE_ADDR'] . " via cookie");

}

foreach ($_SERVER as $key=>$val) { consoleLog($key . " " . $val); }

include '../res/scripts/ads.php';

?>