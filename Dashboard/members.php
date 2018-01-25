<?php
include_once 'firebase-connect.php';
include_once './includes/functions.php';
// Start the session
sec_session_start();
if(isset($_SESSION['token'])){
    if(verifyToken($_SESSION['token'], $firebase)!=true){
        header('Location: ./index.php');
    }else{
        echo"logged in";
    }
}else{
    header('Location: ./index.php');
}