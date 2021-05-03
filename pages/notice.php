<!-- ---------------------------------------------------------------------- --
  - Joseph Calles, Benjamin Friedman, & Tammy Liu
  - University of Massachusetts Lowell
  - COMP.4620-201 SP2021 Term Project
  - Filename: getting_started.php
  - Link: <INSERT HERE>
  - Email:  joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
  - Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu. 
        All rights reserved. May be freely copied or excerpted for educational 
        purposes with credit to the author.
  - File created on 03/19/2021.
  - HTML file to guide the user on how this website is intended to be used
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
        .notice {
        font-size:200%;
        background-color:orange;
        box-shadow: 0px 0px 10px orange;
        width:65%;
        color:white;
    }
    </style>
</head>

<body>

   <?php include "../res/modules/navbar.php"; ?>

    <?php
        $link = rtrim(strtr(base64_encode("/pages/user_account_main.php"), '+/', '-_'), '=');
    ?>

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <center>

                <div class="notice">
                    Please sign in before accessing the networking page
                </div>           

                <br>

                <a href="signin.php?from=<?php echo $link ?>" target="_self">
                    <button class="btn btn-lg btn-dark" type="button">
                        Sign in&nbsp;
                    </button>
                </a>

                </center>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>



    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
