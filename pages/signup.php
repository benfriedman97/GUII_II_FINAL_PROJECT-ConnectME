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

        .error {
            color:red;
        }
    </style>

</head>

<body>

    <?php include "../res/modules/navbar.php"; ?>

    <?php include "../res/scripts/send_email_verification.php"; ?>

    <?php

// validate input
    // initialize variables
    $first_name = $last_name = $date_of_birth = $address = $city = $state = $account_type = "";
    $univ_or_comp = $email = $password = $repeat_password = $interests = $validation_key = "";

    $first_name_error = $last_name_error = $date_of_birth_error = $address_error = $city_error = $state_error = $account_type_error = "";
    $univ_or_comp_error = $email_error = $password_error = $repeat_password_error = $interests_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userdb_connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($userdb_connection->connect_error) {
        die("Connection failed:" . $userdb->connect_error);
    }

    $stmt = $userdb_connection->prepare("INSERT INTO user_information (first_name, last_name, date_of_birth,
        address, city, state, account_type, univ_or_comp, email, password, validation_key, interests)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssss", $first_name, $last_name, $date_of_birth, $address, $city, 
        $state, $account_type, $univ_or_comp, $email, $password, $validation_key, $interests);

    $valid_input = true;

    // required fields
    if (empty($_POST["first_name"])) {
        $first_name_error = "* First name is required";
        $valid_input = false;
    } else {
        $first_name = cleanup_input1($_POST["first_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $first_name)) {
            $first_name_error = "* Only letters and white space allowed";
            $valid_input = false;
        }
    }

    if (empty($_POST["last_name"])) {
        $last_name_error = "* Last name is required";
        $valid_input = false;
    } else {
        $last_name = cleanup_input1($_POST["last_name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $last_name)) {
            $last_name_error = "* Only letters and white space allowed";
            $valid_input = false;
        }
    }

    if (empty($_POST["date_of_birth"])) {
        $date_of_birth_error = "* Date of birth is required";
        $valid_input = false;
    } else {
        $date_of_birth = $_POST["date_of_birth"];
    }

    if (empty($_POST["address"])) {
        $address_error = "* Address is required";
        $valid_input = false;
    } else {
        $address = cleanup_input2($_POST["address"]);
    }

    if (empty($_POST["city"])) {
        $city_error = "* City is required";
        $valid_input = false;
    } else {
        $city = cleanup_input2($_POST["city"]);
    }

    if (empty($_POST["state"])) {
        $state_error = "* State is required";
        $valid_input = false;
    } else {
        $state = $_POST["state"];
    }

    if (empty($_POST["account_type"])) {
        $account_type_error = "* Account type is required";
        $valid_input = false;
    } else {
        $account_type = $_POST["account_type"];
    }

    if (empty($_POST["univ_or_comp"])) {
        $univ_or_comp_error = "* University/Company is required";
        $valid_input = false;
    } else {
        $univ_or_comp = cleanup_input2($_POST["univ_or_comp"]);
    }

    if (empty($_POST["email"])) {
        $email_error = "* Email is required";
        $valid_input = false;
    } else {
        $email = cleanup_input1($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "* Invalid email format";
            $valid_input = false;
        } else {
            $email_already_exists = "SELECT email FROM user_information WHERE email = '$email'";
            $result = $userdb_connection->query($email_already_exists);
            if ($result->num_rows > 0) {
                $email_error = "* An account with this email already exists";
                $valid_input = false;
            }
        }
    }

    if (empty($_POST["password"])) {
        $password_error = "* Password is required";
        $valid_input = false;
    } else {
        $password = cleanup_input1($_POST["password"]);
    }

    if (empty($_POST["repeat_password"])) {
        $repeat_password_error = "* Repeat password is required";
        $valid_input = false;
    } else {
        $repeat_password = cleanup_input1($_POST["repeat_password"]);
        if ($repeat_password != $password) {
            $repeat_password_error = "* Passwords must match";
            $valid_input = false;
        }
    }

    if (empty($_POST["interests"])) {
        $interests_error = "* Interests is required";
        $valid_input = false;
    } else {
        $interests = cleanup_input2($_POST["interests"]);
    }

    $validation_key = generate_key();

    if ($valid_input == true) {
        
        $stmt->execute();
        $stmt->close();
        $userdb_connection->close();

        send_email_verification($email, $first_name, $validation_key);
        ?>
        <script type="text/javascript">
            window.location = "signup_success.php";
        </script>
        <?php
        //echo "New records created successfully";
        
        
    } else {
        //echo "New record unsuccessfully created";
    }
    
}

    // removes spaces
    function cleanup_input1($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    // doesn't remove spaces
    function cleanup_input2($data) {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>
    
    <div class="container text-center">
        <div class="p-4 mb-4 bg-light rounded-3">
            <div class="container-fluid py-7">
                <main class="form-signup">
                    <form class="modal-content" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="container">

                            <h1>Sign Up</h1>
                            <p>Please fill out the form below to create an account.</p>
                            <hr>

                            <!-- First Name -->
                            <label for="text"><b>First Name</b></label>
                            <input type="text" placeholder="First Name" name="first_name" id="first_name" value="<?php echo $first_name;?>">
                            <span class="error"> <?php echo $first_name_error;?></span>

                            <!-- Last Name -->
                            <label for="text"><b>Last Name</b></label>
                            <input type="text" placeholder="Last Name" name="last_name" id="last_name" value="<?php echo $last_name;?>">
                            <span class="error"><?php echo $last_name_error;?></span>

                            <!-- DOB -->
                            <label for="birthday"><b>Date of Birth</b></label>
                            <input type="date" name="date_of_birth" id="date_of_birth">
                            <span class="error"><?php echo $date_of_birth_error;?></span>

                            <!-- Address -->
                            <label for="text"><b>Address</b></label>
                            <input type="text" placeholder="Address" name="address" id="address" value="<?php echo $address;?>">
                            <span class="error"><?php echo $address_error;?></span>

                            <!-- City -->
                            <label for="text"><b>City</b></label>
                            <input type="text" placeholder="City" name="city" id="city" value="<?php echo $city;?>">
                            <span class="error"><?php echo $city_error;?></span>

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
                                <option value="DE">Delaware</option>
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
                            <span class="error"><?php echo $state_error;?></span>


                            <!-- Profile Type -->
                            <label for="account type">Account Type</label>
                            <select name="account_type" id="account_type">
                                <option value="Student">Student</option>
                                <option value="Mentor">Mentor</option>
                            </select>
                            <span class="error"><?php echo $account_type_error;?></span>


                            <!-- Organization -->
                            <label for="text"><b>University or Company</b></label>
                            <input type="text" placeholder="Enter university or company" name="univ_or_comp" id="univ_or_comp" value="<?php echo $univ_or_comp;?>">
                            <span class="error"><?php echo $univ_or_comp_error;?></span>

                            <!-- Email -->
                            <label for="email"><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" id="email" value="<?php echo $email;?>">
                            <span class="error"><?php echo $email_error;?></span>

                            <!-- Password -->
                            <label for="psw"><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" value="<?php echo $password;?>">
                            <span class="error"><?php echo $password_error;?></span>

                            <!-- Repeat Password -->
                            <label for="psw-repeat"><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="repeat_password" id="repeat_password" value="<?php echo $repeat_password;?>">
                            <span class="error"><?php echo $repeat_password_error;?></span>

                            <label for="interests"><b>CS Interests/Programming Languages</b></label>
                            <input type="text" placeholder="Enter interests/languages separate by a comma" name="interests" id="interests" value="<?php echo $interests;?>">
                            <span class="error"><?php echo $interests_error;?></span>

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

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
