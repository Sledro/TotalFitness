firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      firebase.auth().currentUser.getToken(/* forceRefresh */ true).then(function(idToken) {
      
        // Send token to your backend via HTTPS
        window.location = "./includes/verify-token.php?token="+idToken;
        // ...
      }).catch(function(error) {
        firebase.auth().signOut();
        // Handle error
      });

  
    } else {
      // No user is signed in.
  

      document.getElementById("login_div").style.display = "block";
  
    }
  });
  
  function login(){
  
    var userEmail = document.getElementById("email_field").value;
    var userPass = document.getElementById("password_field").value;
  
    firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
      // Handle Errors here.
      var errorCode = error.code;
      var errorMessage = error.message;
  
      window.alert("Error : " + errorMessage);
  
      // ...
    });
  
  }
  
  function logout(){
    firebase.auth().signOut();
  }
  