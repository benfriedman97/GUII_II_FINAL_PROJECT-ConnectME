<!-- ---------------------------------------------------------------------- --
  - Joseph Calles, Benjamin Friedman, & Tammy Liu
  - University of Massachusetts Lowell
  - COMP.4620-201 SP2021 Term Project
  - Filename: about_us.html
  - Link: <INSERT HERE>
  - Email:  joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
  - Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu. 
        All rights reserved. May be freely copied or excerpted for educational 
        purposes with credit to the author.
  - File created on 03/19/2021.
  - HTML file for introducing the developers
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
    <!-- metadata -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="authors" content="Joseph Calles, Benjamin Friedman, Tammy Liu" />
    <meta name="description" content="COMP.4210-201 SP2021 Term Project" />
    <meta name="organization" content="University of Massachusetts Lowell" />
    <meta name="keywords" content="UML, GUI, HTML5, CSS3, JS, PHP, Bootstrap 5.0" />
    
    <!-- title -->
    <title>ConnectME</title>
    
    <!-- tab icon -->
    <link rel="icon" type="image/x-icon" href="res/images/icon.webp" />

    <!-- CSS styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
          rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
          crossorigin="anonymous" />
    <link rel="stylesheet" 
          type="text/css" 
          href="res/styles/bootstrap-cerulean-theme.min.css" />
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" 
          type="text/css" 
          href="res/styles/style.css" />
</head>

<body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-dark bg-primary">
        <form class="container-fluid">
            <!-- dropdown -->
            <div class="col-xs-3">
                <div class="btn">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item active" href="about_us.php" target="_self">About Us</a></li>
                        <li><a class="dropdown-item" href="the_industry.php" target="_self">The Industry</a></li>
                        <li><a class="dropdown-item" href="networking.php" target="_self">Networking</a></li>
                        <li><a class="dropdown-item" href="getting_started.php" target="_self">Getting Started</a></li>
                        <li><a class="dropdown-item" href="contact.php" target="_self">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- navbar heading -->
            <div class="col-xs-9">
                <img class="align-middle" src="res/images/icon.webp" width="50px" />
                <a class="align-middle" href="index.php" target="_self" id="navbar-title">ConnectME</a>
            </div>

            <!-- sign-in -->
            <div id="sign-in" class="col-xs-3">
                <div id="welcome_placeholder"></div>
                <button class="btn btn-lg btn-outline-secondary" type="button">
                    <a href="signin.php" target="_self">Sign in</a>
                </button>
            </div>
        </form>
    </nav>

    <br /><br /><hr />

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-danger">
                Left Sidebar
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-sm-12 col-md-8">
                <p>
                    ABOUT US
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
        </div>
    </div>

    <hr/>

    <!-- footer -->
    <footer> <center>
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-md-2 justify-content-center">
                    <img src="res/images/icon.webp" width="50px" />
                </div>

                <div class="col-xs-12 col-md-8 justify-content-center">
                    <!-- copyright -->
                    Copyright &copy; Joseph Calles, Benjamin Friedman, & Tammy Liu 
                    <?php echo date("Y");?>. All rights reserved.

                    <!-- mailto -->
                    &emsp;<a class="nl-social2" 
                            href="mailto:joseph_calles@student.uml.edu,benjamin_friedman@student.uml.edu,tammy_liu@student.uml.edu">
                        <i class="bi bi-envelope"></i> <!-- icon -->

                    <!-- github repository -->
                    &emsp;</a><a href="#" target="_blank">
                        <i class="bi bi-github"></i></a> <!-- icon -->

                    <!-- home -->
                    &emsp;</a><a href="index.php" target="_self">
                        <i class="bi bi-house"></i></a> <!-- icon -->
                                    
                    <br />
                    Source code is distributed under the MIT license.
                </div>

                <!-- PayPal link -->
                <div class="col-xs-12 col-md-2 justify-content-center">
                    <form action="https://www.paypal.com/donate" method="post" target="_top">
                        <input type="hidden" name="business" value="RCM9NZRQ4MQRW" />
                        <input type="hidden" name="currency_code" value="USD" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
                    </form>
                </div>
            </div>
        </div>
    </footer> </center>

    <!-- scripts -->

        <!-- jQuery -->
    <script type="text/javascript" 
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" 
            crossorigin="anonymous"></script>

        <!-- JavaScript -->
    <script type="text/javascript" 
            src="res/scripts/script.js"></script>

</body>

</html>
