<?php

include_once './firebase-connect.php';
include_once './functions.php';
 
if (isset($_POST['username'], $_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // The hashed password.
    $username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); //XSS Security

    echo login($username, $password, $firebase);
        if (login($username, $password, $firebase) == true) {
            // Login success 
            header('Location: ../membersArea.php');
        } else {
            // Login failed 
            header('Location: ../index.php?error=1&username='.$username);
        }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}

