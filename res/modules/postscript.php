<?php

// if a user is signed-in, add a welcome message
if (isset($_SESSION["signed-in"]) && $_SESSION["signed-in"] === true &&
    isset($_SESSION["current-user-name"]) ) {

    $msg; // custom message based on the time of day
    date_default_timezone_set("America/New_York");
    $hour = date("H");
    if ($hour < 12) { 
        $msg = "Good Morning, "  ;
    } else if ($hour < 18) {
        $msg = "Good Afternoon, ";
    } else if ($hour < 24) {
        $msg = "Good Evening, "  ;
    } else {
        $msg = "Welcome, "       ;
    }

    // generate redirect link for post-signout
    $link = openssl_encrypt($_SERVER["REQUEST_URI"], 
                        "CAMELLIA-128-CBC", 
                        "ConnectME", 0, 
                        "1234567891011121"); 

    // replace the sign-in button and add welcome message
    echo ' 
    <script>
        $(".welcome_message").replaceWith("                           \\
            <span class=\\"align-middle\\" style=\\"font-size:150%\\"> \\
                ' . $msg . $_SESSION["current-user-name"] . '           \\
            </span>                                                      \\
        ");

        $("#sign-in > a > button").text("Sign out");
        $("#sign-in > a").attr("href", "../res/scripts/system-signout.php?from=';
        
    echo $link; // STRING SYNTAX MAGIC

    echo '");
        $("#sign-in > a > button").toggleClass("btn-dark");
        $("#sign-in > a > button").toggleClass("btn-light");

    </script>
    ';
}

?>