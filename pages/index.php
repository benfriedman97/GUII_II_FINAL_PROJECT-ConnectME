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
  - HTML file for the landing page of our project
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
</head>

<body>

    <?php include "../res/modules/navbar.php"; ?>

    <!-- main body -->
    <div class="container-fluid">
        <div class="row">

            <!-- left sidebar -->
            <div class="col-xs-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>

            <!-- main content -->
            <div class="col-xs-12 col-md-8">
                <div class="p-4 mb-4 bg-light rounded-3">
                    <div class="container-fluid py-5">
                        <div class="row">
                            <div class="col-8">
                            <br><br>
                                <h1 class="display-5 fw-bold">Welcome to ConnectME</h1>
                                <p class="fs-4">&emsp;Where we're connecting <i>you</i> to everyone.</p>
                            </div>
                            <div class="col-4">
                                <img src="../res/images/icon.webp" width="200px" />
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <div>
                    <h2>Mission Statement</h2>
                    <p style="font-size:120%;">
                        Our mission is to be more than just another career center —our mission is to connect students to professional resources beyond the network of their own university. This website was originally conceived as a term project for Graphical User Interface Programming II at the University of Massachusetts —Lowell (UML). It is implemented mostly in PHP with significant parts of HTML and Javascript. This website is hosted by UML at weblab.cs.uml.edu.
                    </p>
                </div>

                <br/> <hr/> <br/>

                <div>
                    <h2 style="padding-left:10%">Getting Started With Us</h2>
                    <p style="padding-left:10%">
                        <ul style="list-style-type:none;padding-left:10%;font-size:120%;">
                            <li>Step 1: create an account with us</li>
                            <li>Step 2: setup your profile and upload your resume</li>
                            <li>Step 3: search for mentors, experts, classmates, professors, etc. and add them to your network</li>
                            <li>Step 4: send them a message to introduce yourself and strike up a conversation</li>
                            <li>Step 5: utilize the resources on ConnectME
                                <ul style="padding-left:5%;list-style-type:square;">
                                    <li>read articles under our industry page</li>
                                    <li>try out our practice problems</li>
                                    <li>ask to schedule a mock-interview with one of your mentors</li>
                                    <li>look-up job opportunities on search engine</li>
                                </ul>
                            
                            </li>
                        </ul>
                    </p>
                </div>
            </div>

            <!-- right sidebar -->
            <div class="col-xs-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>
            
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

    <!-- page-specific modification -->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#menu-items li:nth-child(1) a").addClass("active");
        });
    </script>

    <?php include '../res/modules/postscript.php'; ?>

<body>

</body>

</html>
