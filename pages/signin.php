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

<!-- start session if it is not already started -->
<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>

<!DOCTYPE html>

<html lang="en-us">

<head>
    <?php include "../res/modules/header.php"; ?>

    <!-- page-specific style -->
    <style>

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>

</head>

<body>

    <?php include "../res/modules/navbar.php"; ?>

    <!-- https://getbootstrap.com/docs/5.0/examples/sign-in/ -->
    <!-- generic signin page provided by Bootstrap -->

    <!-- main body -->
    <div class="container text-center">
        <div class="p-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-7">
                <main class="form-signin">
                    <form action="../res/scripts/signin.php" method="post">

                        <!-- header -->
                        <img class="mb-4" src="../res/images/icon.webp" alt="" width="100">
                        <h1 class="h3 mb-3 fw-normal">Sign in</h1>

                        <!-- email -->
                        <div class="form-floating">
                            <input  type="email" 
                                    class="form-control" 
                                    id="floatingInput" 
                                    name="_email" 
                                    placeholder="name@example.com" 
                                    autocomplete="email"
                                    required >
                            <label for="floatingInput">Email address</label>
                        </div>

                        <!-- password -->
                        <div class="form-floating">
                            <input  type="password" 
                                    class="form-control"
                                    id="floatingPassword" 
                                    name="_password" 
                                    placeholder="Password" 
                                    autocomplete="current-password"
                                    required >
                            <label for="floatingPassword">Password</label>
                        </div>

                        <!-- remember me -->
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Remember me
                            </label>
                        </div>

                        <!-- sign in -->
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                        <br /><br />

                        <!-- sign up alternative -->
                        Not a member? <a href="signup.php" target="_self" class="h6">Sign up!</a>
                    </form>
                </main>
            </div>
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>

</body>

</html>
