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
    <?php include "../res/modules/header.php"; ?>

    <style>
        h1 {
            text-align:center;
        }
        .about {
            padding-top: 50px;
        }
        
        .about a:link {
            color: blue;
            background-color: transparent;
            text-decoration: underline;
        }
        
       .about a:visited {
            color: blue;
            background-color: transparent;
            text-decoration: underline;
       }
        
        .about a:hover {
            color: red;
            background-color: transparent;
            text-decoration: underline;
        }
        
    </style>
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

            <!-- Photo, Email, GitHub -->
                <p style="text-align:center">
                    ABOUT US
                </p>

                <h1>This page needs more work</h1>
                 <!-- Joe -->
                 <div class="about">
                    <h1>Joseph Calles - Full Stack Developer</h1>
                    <p>Joseph Calles is an undergraduate computer science student at
                        UMass Lowell graduating in the Spring of 2021. He will work as
                        a software engineer with HCL Technologies after graduation.
                    </p>
                    <p>GitHub: <a href="https://github.com/JStar-C">JStar-C</a></p>
                    <p>Email: <a href="mailto: joseph_calles@student.uml.edu">joseph_calles@student.uml.edu</a></p>
                </div>

                <!-- Tammy -->
                <div class="about"> 
                    <h1>Tammy Liu - Full Stack Developer</h1>
                    <p>Tammy Liu is an undergraduate computer science and mathematics student at
                        UMass Lowell graduating in the Spring of 2021. She will continue her
                        studies at UMass Lowell after graduation by pursuing a masters degree
                        in mathematics.
                    </p>
                    <p>GitHub: <a href="https://github.com/TammyLiuXD">TammyLiuXD</a></p>
                    <p>Email: <a href="mailto: tammy_liu@student.uml.edu">tammy_liu@student.uml.edu</a></p>
                </div>
               
                <!-- Ben -->
                <div class="about">
                    <h1>Benjamin Friedman - Full Stack Developer</h1>
                    <p>Benjamin Friedman is an undergraduate computer science and mathematics student at
                        UMass Lowell graduating in the Fall of 2022.
                    </p>
                    <p>GitHub: <a href="https://github.com/benfriedman97">benfriedman97</a></p>
                    <p>Email: <a href="mailto: benjamin_friedman@student.uml.edu">benjamin_friedman@student.uml.edu</a></p>
                </div>
                
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-2 bg-warning">
                Right Sidebar
            </div>
            
            <!-- About Us Descriptions -->
            <div class="container-fluid">

            </div>
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <!-- page-specific modification -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("nav ul li:nth-child(1) a").addClass("active");
        });
    </script>

</body>

</html>
