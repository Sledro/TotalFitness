<?php
include_once './includes/functions.php';
include_once './includes/firebase-connect.php';
sec_session_start();
 
// Unset all session values 
$_SESSION = array();
 
// get session parameters 
$params = session_get_cookie_params();
 
// Delete the actual cookie. 
setcookie(session_name(),
        '', time() - 42000, 
        $params["path"], 
        $params["domain"], 
        $params["secure"], 
        $params["httponly"]);
 
// Destroy session 
session_destroy();
?>

  <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyB2ZAeSQ7mjGEF1sfE1eRW_dvN5_Nl4O7c",
      authDomain: "totalfitnessapp-7cce5.firebaseapp.com",
      databaseURL: "https://totalfitnessapp-7cce5.firebaseio.com",
      projectId: "totalfitnessapp-7cce5",
      storageBucket: "totalfitnessapp-7cce5.appspot.com",
      messagingSenderId: "136236399284"
    };
    firebase.initializeApp(config);
  </script>
  <script>
firebase.auth().signOut();
</script>
