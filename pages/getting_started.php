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
  
<!-- start session if it is not already started -->
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

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
                    GETTING STARTED
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-info">
                Right Sidebar
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <!-- page-specific modification -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("nav ul li:nth-child(4) a").addClass("active");
        });
    </script>

</body>

</html>
