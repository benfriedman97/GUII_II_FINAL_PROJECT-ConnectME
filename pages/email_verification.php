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

<!DOCTYPE html>

<html lang="en-us">

<head>
    <?php include "../res/modules/header.php"; ?>

    <!-- page-specific style -->
    <style>

    .verification-success {
        font-size:200%;
        background-color:lime;
        box-shadow: 0px 0px 10px lime;
        width:45%;
        color:white;
    }

    .verification-failure {
        font-size:200%;
        background-color:red;
        box-shadow: 0px 0px 10px red;
        width:45%;
        color:white;
    }

    .verification-uneeded {
        font-size:200%;
        background-color:blue;
        box-shadow: 0px 0px 10px blue;
        width:45%;
        color:white;
    }
    
    </style>
</head>

<body>

    <?php include "../res/modules/navbar.php"; ?>

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <center id="verification-placeholder">

                </center>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <?php

        if(isset($_GET["encoded-email"]) && isset($_GET["key"]))
        {
            
            $email = urldecode($_GET["encoded-email"]); 
            $key = urldecode($_GET["key"]);

            $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            // Check connection
            if ($connection->connect_error) {           
                die("Connection failed: " . $connection->connect_error);
            }
            consoleLog("Connected successfully\n");

            $sql_statement = $connection->prepare('
            SELECT * 
            FROM user_information 
            WHERE validation_key=? and email=?
            ');
            $sql_statement->bind_param('ss', $key, $email);

            $sql_statement->execute();
            $sql_statement->store_result();
            //$result = $sql_statement->get_result();
            //$result = $result->fetch_assoc();

            if($sql_statement->num_rows > 0)
            {
                $sql_statement = $connection->prepare('
                UPDATE user_information 
                SET is_verified=1
                WHERE validation_key=? and email=?
                ');
                $sql_statement->bind_param('ss', $key, $email);

                $sql_statement->execute();

                if($sql_statement->affected_rows === 1)
                {
                    echo '
                    <script>
                        $("#verification-placeholder").html("   \\
                            <div class=\"verification-success\"> \\
                                Email Verified!                   \\
                            </div>                                 \\
                        ");
                    </script>';
                }
                else
                {
                    echo '
                    <script>
                        $("#verification-placeholder").html("    \\
                            <div class=\"verification-uneeded\">  \\
                                Email already verified             \\
                            </div>                                  \\
                        ");
                    </script>';
                }
            }
            else
            {
                echo "2";
                echo '
                <script>
                    $("#verification-placeholder").html("   \\
                        <div class=\"verification-failure\"> \\
                            Email verification failed!        \\
                        </div>                                 \\
                        <p>please contact the admins for more information</p> \\
                    ");
                </script>';
            }
            
        }
        else
        {
            echo "3";
            echo '
            <script>
                $("#verification-placeholder").html("   \\
                    <div class=\"verification-failure\"> \\
                        Email verification failed!        \\
                    </div>                                 \\
                    <p>please contact the admins for more information</p> \\
                ");
            </script>';
        }
    ?>

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
