<!-- ---------------------------------------------------------------------- --
  - Joseph Calles, Benjamin Friedman, & Tammy Liu
  - University of Massachusetts Lowell
  - COMP.4620-201 SP2021 Term Project
  - Filename: index.html
  - Link: <INSERT HERE>
  - Email:  joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
  - Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu. 
        All rights reserved. May be freely copied or excerpted for educational 
        purposes with credit to the author.
  - File created on 03/19/2021.
  - HTML file for contacting the developers
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

    <style>

    #response-placeholder {
        color: blue;
        font-size: 125%;
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
                <div class="container">

                    <h2> Contact Us </h2>
                    <p> Thank you for visiting our website. If you have any questions or suggestion to improving this site, please fill in the form below. We will respond as soon as possible. :) </p>
                    
                    <form class="mycontactform" action="" method="POST">
                    
                        <div class="row">

                            <div class="col-2" style="text-align:right">
                                <label> First Name: </label><br><br>
                                <label> Last Name: </label><br><br>
                                <label> Email: </label><br><br>
                                <label> Message: </label>
                            </div>

                            <div class="col-8">
                                <input type="text" name="firstName" size="30"><br><br>
                                <input type="text" name="lastName" size="30"><br><br>
                                <input type="email" name="Email" size="30"><br><br>
                                <textarea name="Message" rows="5" cols="30" style="resize:both;overflow:auto;"></textarea>
                            </div>

                        </div>

                        <br>

                        <div class="row ">
                            <div class="col-2"></div>
                            <div class="col-2">
                                    <button type="submit" name="Submit" style="width:100px"> Submit </button>
                            </div>
                            <div class="col-8">
                                <span id="response-placeholder"></span>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <!-- page-specific modification -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#menu-items li:nth-child(6) a").addClass("active");
        });
    </script>

    <?php

        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {

            $API_key = "REMOVED";

            $email      = sanitize_input($_POST["Email"    ]);
            $first_name = sanitize_input($_POST["firstName"]);
            $last_name  = sanitize_input($_POST["lastName" ]);
            $body       = sanitize_input($_POST["Message"  ]);

            $to = rawurlencode('joseph_calles@student.uml.edu');
            $from = rawurlencode(str_replace('@', '-at-', $email));
            $subject = rawurlencode('Message from ' . $first_name . ' ' . $last_name);
            $txt_msg = rawurlencode($body);

            consoleLog($to);
            consoleLog($from);
            consoleLog($subject);
            consoleLog($txt_msg);
            consoleLog("https://email-sender1.p.rapidapi.com/?txt_msg=" . $txt_msg . "&to=" . $to . "&from=" . $from . "&subject=" . $subject);

            $curl = curl_init();
            // PART 2 : send verification email
            // ----------------------------------------------------------------
            // https://rapidapi.com/darkmanaminovic/api/email-sender1

            // prepare API request to to send verification email
            curl_setopt_array($curl, [
                CURLOPT_URL => "https://email-sender1.p.rapidapi.com/?txt_msg=" . $txt_msg . "&to=" . $to . "&from=" . $from . "&subject=" . $subject,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: email-sender1.p.rapidapi.com",
                    "x-rapidapi-key: " . $API_key
                ],
            ]);

            // execute cURL request 
            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);

            // check for errors and print messages 
            if ($err) {
                echo '
                <script>
                    $("#response-placeholder").text("Message not sent, ' . $err . '");
                </script>
                ';
            } else {
                echo '
                <script>
                    $("#response-placeholder").text("Message sent");
                </script>
                ';
            }

            curl_close($curl);
        }

    ?>

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
