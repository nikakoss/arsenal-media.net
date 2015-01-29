<?php
require_once('recaptchalib.php');
require('../../../../wp-blog-header.php');
global $root;
global $qode_options_subway;

$publickey = $qode_options_subway['recaptcha_public_key'];
$privatekey = $qode_options_subway['recaptcha_private_key']; 

if ($publickey == "") $publickey = "6Ld5VOASAAAAABUGCt9ZaNuw3IF-BjUFLujP6C8L";
if ($privatekey == "") $privatekey = "6Ld5VOASAAAAAKQdKVcxZ321VM6lkhBsoT6lXe9Z";



$resp = recaptcha_check_answer ($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);

//echo $_POST["recaptcha_challenge_field"] . " | " . $_POST["recaptcha_response_field"];
//print_r($resp);

$use_captcha = $qode_options_subway['use_recaptcha'];
if ($resp->is_valid || $use_captcha == "no") {
?>success<?php

$email_to = $qode_options_subway['receive_mail'];
$email_from = $qode_options_subway['email_from'];
$subject = $qode_options_subway['email_subject'];


$text = "Name: " . $_POST["name"] . " " . $_POST["lastname"] . "\n";
$text .= "Email: " . $_POST["email"] . "\n";
$text .= "WebSite: " . $_POST["website"] . "\n";
$text .= "Message: " . $_POST["message"];


$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers .= "From: $email_from" . "\r\n";
mail($email_to, $subject, $text, $headers);



}
else 
{
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .  "(reCAPTCHA said: " . $resp->error . ")");
}
 


?>