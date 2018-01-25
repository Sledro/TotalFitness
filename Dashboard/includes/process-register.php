<?php
include_once './firebase-connect.php';
include_once './functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.
 
if (isset($_POST['email'], $_POST['password'], $_POST['passwordConfirm'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $passwordConfirm = $_POST['passwordConfirm']; 
    if (register($email, $password, $passwordConfirm, $firebase)=="success") {
        // register success 
       // header('Location: ../membersArea.php');
       $error="Successfully Registered!";
       header('Location: ../register.php?error='.$error);

    } else {
        $error= register($email, $password, $passwordConfirm, $firebase);
        header('Location: ../register.php?error='.$error);
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}