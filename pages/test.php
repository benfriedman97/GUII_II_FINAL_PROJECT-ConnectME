<!-- ---------------------------------------------------------------------- --
  - Joseph Calles, Benjamin Friedman, & Tammy Liu
  - University of Massachusetts Lowell
  - COMP.4620-201 SP2021 Term Project
  - Filename: networking.php
  - Link: <INSERT HERE>
  - Email:  joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
  - Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu. 
        All rights reserved. May be freely copied or excerpted for educational 
        purposes with credit to the author.
  - File created on 03/19/2021.
  - HTML file to introduce the user to the art of professional networking
  - TO DO:
        x add main body content
        x make working sign in buttons
        x redesign color scheme (https://bootswatch.com/cerulean/)
        x integrate backend and php server
  -- ---------------------------------------------------------------------- -->

<?php include '../res/modules/prescript.php'; ?>

<?php

if (isset($_SESSION["_remember-me"]) && isset($_SESSION["signed-in"])) {

    // encrypt information before sending cookie
    $email_encrypted    = openssl_encrypt(  $_SESSION["current-user-email"]   , 
                                            "AES-128-CTR", 
                                            "ConnectME", 0, "
                                            1234567891011121");

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
}

?>

<!DOCTYPE html>

<html lang="en-us">

<head>
    <?php include "../res/modules/header.php"; ?>
</head>

<body>

    <?php include "../res/modules/navbar.php"; ?>

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-success">
                Left Sidebar
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <p>
                    <form action="" method="post">
                        <button class="w-30 btn btnsm btn-primary" type="submit">Send email</button>
                    </form>
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <?php include '../res/modules/postscript.php'; ?>

    <?php

        $DB_servername = "weblab.cs.uml.edu";
        $DB_username   = "jcalles";
        $DB_password   = "28Mar2021";
        
        // Create connection
        $conn = new mysqli($DB_servername, $DB_username, $DB_password, "jcalles");
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // Create database
        $sql = "CREATE TABLE test1";
        if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
        } else {
        echo "Error creating database: " . $conn->error;
        }

        $conn->close();

    ?>

</body>

</html>
