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
<html lang="en">
<head>
    <!-- why didn't you include these -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include "../res/modules/header.php"; ?>
</head>
<body>
    <?php include "../res/modules/navbar.php"; ?>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            /* background-color: black; */
        }

        * {
            box-sizing: border-box;
        }

        /* Add padding to containers */
        .container {
            padding: 16px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

       
        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        main a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }

        label {
            display:block;  
            text-align:left;
        }
    </style>

    <div class="container text-center">
        <div class="p-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-7">
                <main class="form-signup">
                    <form class="modal-content" action="../res/scripts/MySQLi_userdb.php" method="post">
                        <div class="container">

                            <h1>Sign Up</h1>
                            <p>Please fill out the form below to create an account.</p>
                            <hr>

                            <!-- First Name -->
                            <label for="text"><b>First Name</b></label>
                            <input type="text" placeholder="First Name" name="first_name" id="first_name" required>

                            <!-- Last Name -->
                            <label for="text"><b>Last Name</b></label>
                            <input type="text" placeholder="Last Name" name="last_name" id="last_name" required>

                            <!-- DOB -->
                            <label for="birthday"><b>Date of Birth</b></label>
                            <input type="date" name="date_of_birth" id="date_of_birth" required>

                            <!-- Address -->
                            <label for="text"><b>Address</b></label>
                            <input type="text" placeholder="Address" name="address" id="address" required>

                            <!-- City -->
                            <label for="text"><b>City</b></label>
                            <input type="text" placeholder="City" name="city" id="city" required>

                            <!-- State -->
                            <label for="states">State</label>
                            <select name="state" id="state">
                                <option value="Alabama">AL</option>
                                <option value="Alaska">AK</option>
                                <option value="Arizona">AZ</option>
                                <option value="Arkansas">AR</option>
                                <option value="California">CA</option>
                                <option value="Colorado">CO</option>
                                <option value="Connecticut">CT</option>
                                <option value="Delaware">DE</option>
                                <option value="Florida">FL</option>
                                <option value="Georgia">GA</option>
                                <option value="Hawaii">HI</option>
                                <option value="Idaho">ID</option>
                                <option value="Illinois">IL</option>
                                <option value="Indiana">IN</option>
                                <option value="Iowa">IA</option>
                                <option value="Kansas">KS</option>
                                <option value="Kentucky">KY</option>
                                <option value="Louisiana">LA</option>
                                <option value="Maine">ME</option>
                                <option value="Maryland">MD</option>
                                <option value="Massachusetts">MA</option>
                                <option value="Michigan">MI</option>
                                <option value="Minnesota">MN</option>
                                <option value="Mississippi">MS</option>
                                <option value="Missouri">MO</option>
                                <option value="Montana">MT</option>
                                <option value="Nebraska">NE</option>
                                <option value="Nevada">NV</option>
                                <option value="New Hampshire">NH</option>
                                <option value="New Jersey">NJ</option>
                                <option value="New Mexico">NM</option>
                                <option value="New York">NY</option>
                                <option value="North Carolina">GA</option>
                                <option value="North Dakota">ND</option>
                                <option value="Ohio">OH</option>
                                <option value="Oklahoma">OK</option>
                                <option value="Oregon">OR</option>
                                <option value="Pennysylvania">PA</option>
                                <option value="Rhode Island">RI</option>
                                <option value="South Carolina">SC</option>
                                <option value="South Dakota">SD</option>
                                <option value="Tennessee">TN</option>
                                <option value="Texas">TX</option>
                                <option value="Utah">UT</option>
                                <option value="Vermont">VT</option>
                                <option value="Virginia">VA</option>
                                <option value="Washington">WA</option>
                                <option value="West Virginia">WV</option>
                                <option value="Wisconsin">WI</option>
                                <option value="Wyoming">VT</option>
                                <option value="District of Columbia">DC</option>
                            </select>

                            <!-- Profile Type -->
                            <label for="account type">Account Type</label>
                            <select name="account_type" id="account_type">
                                <option value="Student">Student</option>
                                <option value="Mentor">Mentor</option>
                            </select>

                            <!-- Organization -->
                            <label for="text"><b>University or Company</b></label>
                            <input type="text" placeholder="Enter university or company" name="univ_or_comp" id="univ_or_comp" required>

                            <!-- Email -->
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" required>

                            <!-- Password -->
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" required>

                            <!-- Repeat Password -->
                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="password_repeat" id="password_repeat" required>
                            <hr>

                            <!-- Terms and and conditions -->
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                            <!-- Submit -->
                            <button type="submit" name="submit_user_info" class="registerbtn">Register</button>
                        
                        </div>
                        
                    </form>
                </main>
            </div>
        </div>
    </div>

    <?php include "../res/modules/footer.php"; ?>
</body>
</html>
