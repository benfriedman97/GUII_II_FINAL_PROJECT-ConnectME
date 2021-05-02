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
                    <form action="" method="POST">

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
                                <input type="checkbox" name="_remember-me" value="remember-me"> Remember me
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

    <?php 
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $email = sanitize_input($_POST["_email"]);
        $password = sanitize_input($_POST["_password"]);

        // MySQLi connection
        
        $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check connection
        if ($connection->connect_error) {           
            die("Connection failed: " . $connection->connect_error);
        }
        consoleLog("Connected successfully\n");

        $sql_statement = $connection->prepare("
            SELECT * 
            FROM user_information 
            WHERE email=?
        ");
        $sql_statement->bind_param("s", $email);

        $sql_statement->execute();

        $a = $sql_statement->store_result();
        consoleLog("rows: " . $sql_statement->num_rows);
        consoleLog($a);
        $sql_statement->bind_result($result_user_id, 
                                    $result_first_name,
                                    $result_last_name,
                                    $result_date_of_birth,
                                    $result_address,
                                    $result_city,
                                    $result_state,
                                    $result_account_type,
                                    $result_univ_or_comp,
                                    $result_email,
                                    $result_password,
                                    $result_is_verified,
                                    $result_interests,
                                    $result_validation_key
                                    );
      
        $sql_statement->fetch();

        $sql_statement->free_result();

        if ($result_email === $email) {
            consoleLog("email matched: " . $email);

            if ($result_password === $password) {
                consoleLog("password matched: " . $password);

                // set session variables
                $_SESSION["current-user-email"]      = $result_email;
                $_SESSION["current-user-password"]   = $result_password;
                $_SESSION["current-user-first-name"] = $result_first_name;
                $_SESSION["current-user-last-name"]  = $result_first_name;
                $_SESSION["signed-in"] = true;

                if (isset($_POST["_remember-me"])) {
                    $_SESSION["_remember-me"] = true;    
                } else {
                     $_SESSION["_remember-me"] = false; 
                }

                systemLog($_SESSION["current-user-email"] . " signed in from IP address " . $_SERVER['REMOTE_ADDR']);

                // redirect to home page
                echo '<script>window.location.replace("../res/scripts/system-signin.php?from=' . $_GET["from"] . '");</script>';

            } 
            else 
            {
                consoleLog("password not matched: " . $password);
                systemLog($email . " failed login from IP address " . $_SERVER['REMOTE_ADDR']);
            }
        } 
        else
        {
            consoleLog("email not matched: " . $email);
        }
    }

    ?>

    <?php include '../res/modules/postscript.php'; ?>


</body>

</html>
