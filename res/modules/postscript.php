<?php

// if a user is signed-in, add a welcome message
if (isset($_SESSION["signed-in"]) && $_SESSION["signed-in"] === true &&
    isset($_SESSION["current-user-first-name"]) ) {

    $msg; // custom message based on the time of day
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
    $link = rtrim(strtr(base64_encode($_SERVER["PHP_SELF"]), '+/', '-_'), '=');

    // replace the sign-in button and add welcome message
    echo ' 
    <script>
        $(".welcome_message").replaceWith(" \\
            <span class=\\"align-middle\\" style=\\"font-size:150%\\"> \\
                ' . $msg . $_SESSION["current-user-first-name"] . ' \\
            </span> \\
        ");

        $("nav > div > span").css("color", "white");

        $("#sign-in > a > button").text("Sign out");
        $("#sign-in > a").attr("href", "../res/scripts/system-signout.php?from=';
        
    echo $link; // STRING SYNTAX MAGIC

    echo '");
        $("#navbar-title").attr("style", "color:white");

        $("nav button").toggleClass("btn-dark");
        $("nav button").toggleClass("btn-light");


        $("nav > div > div > div > button").toggleClass("btn-dark");
        $("nav > div > div > div > button").toggleClass("btn-light");

        $("#account_page_placeholder").replaceWith(" \\
            <a href=\\"user_account_main.php\\" target=\\"_self\\" style=\\"text-align:right;color:white\\"> \\
                <b>Account page</b> <br/> '; echo $_SESSION["current-user-email"]; echo ' \\
            </a> \\
            <a href=\\"user_account_main.php\\" target=\\"_self\\">\\
                <img class=\\"align-middle\\" src=\\"../res/images/account.png\\" width=\\"50px\\" /> \\
            </a> \\
        ");
    </script>
    ';
}

?>