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
            <div class="col-xs-12 col-sm-12 col-md-2">
                <?php display_random_ad(); ?>
            </div>

            <!-- main content -->
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../res/images/joe_headshot.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Joseph Calles</h5>
                        <p class="card-text">Joe is a senior computer science student at UMass Lowell. After graduation,
                            he will work for HCL technologies as a software engineer.
                        </p>
                        <a href="https://github.com/TammyLiuXD" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../res/images/tammy_headshot.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Tammy Liu</h5>
                        <p class="card-text">Tammy is a senior computer science at mathematics student at UMass Lowell.
                            After graduation, she is going to graduate school for mathematics.
                        </p>
                        <a href="https://github.com/JStar-C" class="btn btn-primary">Github</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../res/images/ben_headshot.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Benjamin Friedman</h5>
                        <p class="card-text">Ben is a junior computer science student at UMass Lowell.</p>
                        <a href="https://github.com/benjamin-friedman" class="btn btn-primary">Github</a>
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
            $("#menu-items li:nth-child(2) a").addClass("active");
        });
    </script>

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
