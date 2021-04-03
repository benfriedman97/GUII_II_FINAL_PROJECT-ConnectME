<?php

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
function sanitize_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
