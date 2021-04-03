<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Joseph Calles, Benjamin Friedman, & Tammy Liu
 * University of Massachusetts --Lowell
 * COMP.4620-201 SP2021 Term Project
 * Filename: scripts/MySQLi_functions.php
 * Link: <INSERT HERE>
 * Email:   joseph_calles@student.uml.edu
            benjamin_friedman@student.uml.edu
            tammy_liu@student.uml.edu
 * Copyright (c) 2021 by Josph Calles, Benjamin Friedman, & Tammy Liu.
        All rights reserved. May be freely copied or excerpted for educational
        purposes with credit to the author.
 * File created on 03/19/2021.
 * Primary PHP file to write scripts
 * TO DO:
        x write all custom scripts here
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

// prevent errors from appearing on webpage
error_reporting(E_ERROR | E_PARSE);

// https://www.codegrepper.com/code-examples/php/console.log+in+php
// consoleLog for PHP, credit to @Kaotik 03/07/2020 & @0nline 06/10/2020
function consoleLog($msg) {
    echo '<script type="text/javascript">console.log(' 
        . str_replace('<', '\\x3C', json_encode($msg)) 
        . ');</script>
    ';
}

// https://www.w3schools.com/php/php_form_validation.asp
// form validation, used to sanitize user input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// MySQLi connection

$servername = "localhost";
$username   = "root";
$password   = NULL;
$dbname     = "userdb";

$userdb_connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$userdb_connection) {

    die("Connection failed:" . mysqli_connect_error());
}

if (isset($_POST["submit_user_info"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $account_type = $_POST["account_type"];
    $org_or_univ = $_POST["univ_or_comp"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $mysql_query = "INSERT INTO user_information (first_name, last_name, date_of_birth,
            address, city, state, account_type, univ_or_comp, email, password)
            VALUES ('$first_name', '$last_name', '$date_of_birth', '$address', '$city', 
            '$state', '$account_type', '$org_or_univ', '$email', '$password')";

    if (mysqli_query($userdb_connection, $mysql_query)) {
        echo "New details successfully added to database";
    } else {
        echo "Error: ". $sql . "" . mysqli_error($userdb_connection); 
    }
    mysqli_close($userdb_connection);
}
?>
