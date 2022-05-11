<?php
require_once 'sendEmails.php';
session_start();
$email = "";
$errors = [];


// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    /*$username = $_POST['username'];
    
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password*/
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    sendVerificationEmail($email,$name,$message,$subject);

    
}