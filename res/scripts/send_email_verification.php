<?php

/* # # # # # Send a verification email to the name & email specified # # # # #
 *
 * Pre-conditions:
 *     - $email has not yet been verified and the value of the isVerified
 *       column in the database for this row is 0.
 *     - $name is taken from the sign-up form.
 *     - $key is generated when the user signs-up and is stored in the
 *       database along with other user information.
 *     - This function may only be called up to fifty (50) times per day
 * 
 * Post-conditions
 *     - input will be sanitized and encoded before being used
 *     - an email will be sent to the $email specified after being validated
 *     - a link will be sent redirecting the user to pages/email-verification 
 *       with thier email address in the URI query as "encoded-email".
 *     - returns true when email is validated and message has been sent,
 *       false otherwise. error messages are printed appropriately 
 * 
 * Notes:
 *     - to make the html body of the message, use these three steps
 *       (1) design html : https://wordtohtml.net/
 *       (2) minify      : https://minify-html.com/
 *       (3) URL encode  : https://www.urlencoder.org/
 *     - the API key used in this function should not be made public
 *       becuase it contains sensitive information
 */
function send_email_verification($email, $name, $key) {

    // initial email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        consoleLog("Email is invalid, does not pass regex validation");
        return false;
    }

    // sanitize input
    $sanitizedName = sanitize_input($name);
    $sanitizedEmail = sanitize_input($email);

    // encode input
    $nameEncoded  = urlencode($sanitizedName);
    $emailEncoded = urlencode($sanitizedEmail);
    $verificationLink = urlencode("http://weblab.cs.uml.edu/~jcalles/ConnectME/pages/email_verification.php?encoded-email=" . $emailEncoded . "&key=" . $key);

    $API_key = "REMOVED";

    // PART 1 : validate that the email address exists 
    // ------------------------------------------------------------------------
    // https://rapidapi.com/srgl/api/validect-email-verification

    $curl = curl_init();

    // prepare API request to validate that $emailEncoded is a valid address
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://validect-email-verification-v1.p.rapidapi.com/v1/verify?email=" . $emailEncoded,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: validect-email-verification-v1.p.rapidapi.com",
            "x-rapidapi-key: " . $API_key
        ],
    ]);

    // execute cURL request 
    $response = json_decode(curl_exec($curl));
    $err = curl_error($curl);

    // check for errors and print messages 
    if ($err) {
        consoleLog("cURL Error #:" . $err);
        return false;
    } else {
        consoleLog($response);
        if ($response->status === "invalid")
        {
            consoleLog("No email sent: address (" . $email .") is invalid");
            return false;
        }
    }

    // PART 2 : send verification email
    // ------------------------------------------------------------------------
    // https://rapidapi.com/darkmanaminovic/api/email-sender1

    // prepare API request to to send verification email
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://email-sender1.p.rapidapi.com/?txt_msg=X&to=" . $emailEncoded . "&from=ConnectME-Team&subject=%E2%9C%A8%20ConnectME%20Sign-up%20Confirmation%20%E2%9C%A8&html_msg=%3Cbody%20style%3D%22font-family%3APalatino%20Linotype%2CBook%20Antiqua%2CPalatino%2Cserif%22%3E%3Cp%3EHello%20" . $nameEncoded . "%2C%3Cp%3EThank%20you%20for%20signing-up%20with%20ConnectME.%20We%20make%20getting%20expert%20advice%20and%20mentorship%20as%20easy%20as%20it%20ought%20to%20be%20with%20our%20state-of-the-art%20online%20social%20platform.%20Before%20you%20can%20start%2C%20we%20ask%20that%20you%20verify%20your%20email.%20Please%20click%20here%3A%20%3Ca%20href%3D" . $verificationLink . "%20target%3D_blank%3EVerify%20email%3C%2Fa%3E%3Cp%3EWe%20hope%20that%20you%20enjoy%20your%20experience%20in%20your%20quest%20to%20become%20a%20better%20you%21%3Cp%3ESincerely%2C%3Cp%3E-%20The%20ConnectME%20Team%3Cp%20style%3Dtext-align%3Acenter%3Bline-height%3A1%3E%3Cspan%20style%3Dfont-size%3A12px%3EThis%20email%20is%20intended%20for%20" . $nameEncoded . ".%20If%20you%20are%20not%20" . $nameEncoded . "%2C%20please%20disregard%20this%20email.%3Cbr%3ECopyright%20%C2%A9%20Joseph%20Calles%2C%20Benjamin%20Friedman%2C%20%26%20Tammy%20Liu%202021.%20All%20rights%20reserved.%3C%2Fspan%3E",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: email-sender1.p.rapidapi.com",
            "x-rapidapi-key: " . $API_key
        ],
    ]);

    // execute cURL request 
    $response = json_decode(curl_exec($curl));
    $err = curl_error($curl);

    // check for errors and print messages 
    if ($err) {
        consoleLog("cURL Error #:" . $err);
        return false;
    } else {
        consoleLog("Verification email sent to " . $name . " at " . $email);
    }

    curl_close($curl);

    return true;
}

// create a 12-character random string
function generate_key() {
    return substr(sha1(mt_rand()),0,12);
}

?>
