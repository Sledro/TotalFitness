<?php
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
// Author: Daniel Hayden
// Student No: C00137009
// Contact: dan@sledro.com
// Description: This file connects to the Google Firebase Service which handles
//              User Authentication and 

include (ABS_PATH.'/TotalFitness/Dashboard/vendor/autoload.php');

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// Authenticate Firebase credentials via Service Account json file downloaded from Firebase
$serviceAccount = ServiceAccount::fromJsonFile(ABS_PATH.'/TotalFitness/Dashboard/firebase_credentials.json');
$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    ->create();

//$database = $firebase->getDatabase();

//$reference = $database->getReference('users/1/email');

//$value = $reference->getValue();

//echo $value;

