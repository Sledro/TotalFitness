<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       
         <link rel="stylesheet" href="./assets/css/style.css">
        <title>Login System</title>
        </head>

        <body>
        <br/><br/><br/>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-login">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="./index.php" class="active" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="./register.php" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-lg-12">
                            
                                <div class="form-group">
                                  <input type="text" name="email" id="email_field" r tabindex="1" class="form-control" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                  <input type="password" name="password" id="password_field" tabindex="2" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                      <input type="submit" onclick="login()" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-lg-12">
                                      <div class="text-center">
                                        <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                           
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
