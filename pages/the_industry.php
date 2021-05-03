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
  
<?php include '../res/modules/prescript.php'; ?>

<!DOCTYPE html>

<html lang="en-us">

<head>
    <?php include "../res/modules/header.php"; ?>
    <style>
        .equal {
        display: flex;
        display: -webkit-flex;
        flex-wrap: wrap;
        }

        .cls {
            clear: both;
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

                <div class="container overflow-hidden gy-5">

                    <div class="row py-3">

                        <div class="col-5">
                            <div class="p-3 border bg-light">
                                <div class="row">
                                    <div class="col-5" style="text-align:right">
                                        <b>Top <br> programming <br>languages <br>2021</b><br>
                                    </div>
                                    <div class="col-7">
                                        <a href="https://www.northeastern.edu/graduate/blog/most-popular-programming-languages/" target="_blank">
                                            <img class="align-middle" src="../res/images/industry2.png" width="100%" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-7 equal">
                            <div class="p-3 border bg-light">
                                <center><b>Available STEM Jobs compared to STEM Grads</b></center> <br/>
                                <a href="https://cs.calvin.edu/images/department/jobs/2028/" target="_blank">
                                    <img class="align-middle" src="../res/images/industry1.png" width="100%" />
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="row p-3">
                        <div class="p-3 border bg-light">
                            <b>Best Jobs for Computer Science Majors</b><br>
                            <a href="https://www.payscale.com/college-salary-report/common-jobs-for-majors/computer-science" target="_blank">
                                https://www.payscale.com/college-salary-report/common-jobs-for-majors/computer-science
                            </a>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="p-3 border bg-light">
                            <b>Best Websites to learn Coding Languages for free</b><br>
                            <a href="https://www.hostinger.com/tutorials/learn-coding-online-for-free/" target="_blank">
                                https://www.hostinger.com/tutorials/learn-coding-online-for-free/
                            </a>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="p-3 border bg-light">
                            <b>Top 10 Innovative Tech Startups to Watch for in 2021</b><br>
                            <a href="https://edgy.app/tech-startups-2021" target="_blank">
                                https://edgy.app/tech-startups-2021
                            </a>
                        </div>
                    </div>

                    <div class="row p-3">
                        <div class="p-3 border bg-light">
                            <b>8 of the Best Technology Company Cultures</b><br>
                            <a href="https://www.mycomputercareer.edu/8-of-the-best-technology-company-cultures-in-2016/" target="_blank">
                                https://www.mycomputercareer.edu/8-of-the-best-technology-company-cultures-in-2016/
                            </a>
                        </div>
                    </div>

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
            $("#menu-items li:nth-child(3) a").addClass("active");
        });
    </script>

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
