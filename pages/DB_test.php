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
<?php
    $connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

    if ($connection->connect_error) {           
        die("Connection failed: " . $connection->connect_error);
    }
    consoleLog("Connected successfully\n");

    /*
    $sql_statement = "
    CREATE TABLE IF NOT EXISTS user_information (
        user_id bigint(20) NOT NULL AUTO_INCREMENT,
        first_name varchar(64),
        last_name varchar(64),
        date_of_birth date,
        address varchar(64),
        city varchar(64),
        state varchar(3),
        account_type varchar(8),
        univ_or_comp varchar(64),
        email varchar(64) NOT NULL,
        password varchar(64) NOT NULL,
        is_verified tinyint(1) DEFAULT 0,
        interests varchar(256),
        validation_key varchar(12),
        PRIMARY KEY (user_id)
    );
    ";
    */

    /*
    $sql_statement = "
    INSERT INTO user_information (first_name, last_name, account_type, univ_or_comp, email, password, interests)
    VALUES ('joseph', 'calles', 'student', 'UML', 'joseph_calles@student.uml.edu', '123456', 'C, C++, PHP, Javascript');";
    */

    // $sql_statement = "DROP TABLE user_information";

?>

    <?php include "../res/modules/footer.php"; ?>

    <?php include '../res/modules/postscript.php'; ?>

</body>

</html>
