<?php

function verifyToken($idTokenString, $firebase){

    try{
        $auth = $firebase->getAuth();
        $idToken = $auth ->verifyIdToken($idTokenString);
        $uid = $idToken->getClaim('sub');
        $_SESSION["token"]=$idTokenString;
        return true;
    } catch (RuntimeException $e) {
        //$e->getMessage();
        return false;
    }
}

function sec_session_start() {
    define("SECURE", FALSE); 
    $session_name = 'sec_session_id';   // Set a custom session name 
    $secure = SECURE;
    // This stops JavaScript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    session_start();            // Start the PHP session 
    session_regenerate_id();    // regenerated the session, delete the old one. 
}

//Used to add a a user to the database. Input is sanitized before it gets here.
function register($email, $password, $passwordConfirm, $firebase){
    $error=false;

    if($password!=$passwordConfirm){
        $error=1;
        return "Your Passwords did not match!";
    }
    if($error==false){
        $auth = $firebase->getAuth();
        try{
        
         $response = $auth->createUserWithEmailAndPassword($email, $password);
         return "success";
        } catch (Exception $e) {
            $response = $e->getMessage();
            return $response;
          }
        
    
    }
}