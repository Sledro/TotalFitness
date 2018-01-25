<html>
<head>
<title>Firebase Login</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/login.css" />
</head>
<body>

        <div id="login_div" class="main-div">
          <h3>Total Fitness Login</h3>
          <input type="email" placeholder="Email..." id="email_field" />
          <input type="password" placeholder="Password..." id="password_field" />

          <button onclick="login()">Login to Account</button>
        </div>



      
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
<script src="./assets/js/login.js"></script>