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
$dbname     = "myDB";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    consoleLog("Connection failed: " . mysqli_connect_error());
    die();
}
consoleLog("Connected successfully\n");

//mysqli_query($connection, $sql_statement);
//mysqli_multi_query($connection, $sql_statement);

/* create database
$sql_statement = "CREATE DATABASE myDB";
if (mysqli_query($connection, $sql_statement)) {
    consoleLog("Database created successfully\n");
} else {
    consoleLog("Error creating database: " . mysqli_error($connection));
}
*/

/* output results
$result = mysqli_query($connection, $sql_statement);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["item1"] . $row["item2"]. $row["itemN"];
    }
}
*/


// close connection
mysqli_close($connection);
?>
