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
                    <form class="modal-content" action="" method="post">
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
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Deleware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennysylvania</option>
                                <option value="RhI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                                <option value="DC">District of Colombia</option>
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
