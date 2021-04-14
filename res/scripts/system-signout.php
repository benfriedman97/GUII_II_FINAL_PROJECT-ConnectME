<?php session_start(); ?>

<DOCTYPE! html>

<?php

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