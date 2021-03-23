<!-- ---------------------------------------------------------------------- --
  - Joseph Calles, Benjamin Friedman, & Tammy Liu
  - University of Massachusetts Lowell
  - COMP.4620-201 SP2021 Term Project
  - Filename: the_industry.php
  - Link: <INSERT HERE>
  - Email:  joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
  - Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu. 
        All rights reserved. May be freely copied or excerpted for educational 
        purposes with credit to the author.
  - File created on 03/19/2021.
  - HTML file to introduce the user to the Computer Science industry
  - TO DO:
        x add main body content
        x make working sign in buttons
        x redesign color scheme (https://bootswatch.com/cerulean/)
        x integrate backend and php server
  -- ---------------------------------------------------------------------- -->
  
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
    <nav class="navbar navbar-fixed-top navbar-dark bg-primary">
        <form class="container-fluid">
            <div class="col-xs-3">
                <!-- dropdown -->
                <div class="btn">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-start">
                        <li><a class="dropdown-item" href="about_us.php" target="_self">About Us</a></li>
                        <li><a class="dropdown-item active" href="the_industry.php" target="_self">The Industry</a></li>
                        <li><a class="dropdown-item" href="networking.php" target="_self">Networking</a></li>
                        <li><a class="dropdown-item" href="getting_started.php" target="_self">Getting Started</a></li>
                        <li><a class="dropdown-item" href="contact.php" target="_self">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- title -->
            <div class="col-xs-9">
                <a href="index.php" id="navbar-title">ConnectME</a>
            </div>

            <!-- sign-in -->
            <div id="sign-in-buttons" class="col-xs-12">
                <a href="#" target="_self"><img src="res/images/google_logo.png" width="30px" /></a>
                <a href="#" target="_self"><img src="res/images/linkedin_logo.png" width="35px" /></a>
                <a href="#" target="_self"><img src="res/images/github_logo.png" width="30px" /></a>
                <button class="btn btn-md btn-outline-secondary" type="button">Sign in</button>
            </div>
        </form>
    </nav>

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
                    THE INDUSTRY
                </p>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
        </div>
    </div>

    <!-- footer -->
    <footer>
        <hr/>
        <center><p>

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

        <br>
        Source code is distributed under the MIT license.
        </p></center>
    </footer>

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
