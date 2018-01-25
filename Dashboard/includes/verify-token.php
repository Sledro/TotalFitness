<?php
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

include_once './functions.php';

require '../vendor/autoload.php';
// Start the session
sec_session_start();
if(isset($_GET['token'])){
    $idTokenString = $_GET['token']; // The token from the client
}

// Authenticate Firebase credentials via Service Account json file downloaded from Firebase
$serviceAccount = ServiceAccount::fromJsonFile('../firebase_credentials.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

try{
    $auth = $firebase->getAuth();
    $idToken = $auth ->verifyIdToken($idTokenString);
    $uid = $idToken->getClaim('sub');
    $_SESSION["token"]=$idToken;
    echo $uid; 
    header('Location: ../index.php');
} catch (\Exception $e) {
    //$e->getMessage();
    echo"Token not correctly formatted. Login Failed.";
} 

InvalidArgumentException
?>