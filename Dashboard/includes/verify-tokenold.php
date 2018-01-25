<?php
// Start the session

include_once 'firebase-connect.php';


if(isset($_GET['token'])){
$idTokenString = $_GET['token']; // The token from the client
}
try {
    echo"notloggedin";
    if($firebase->getAuth()->verifyIdToken($idTokenString)!=null){
        
    }
} catch (InvalidIdToken $e) {
    
     echo"notloggedin";
}


?>