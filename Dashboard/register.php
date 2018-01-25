<?php
include_once './pages/header.php';
include_once './includes/firebase-connect.php';
include_once './includes/functions.php';
if(isset($_GET['error'])){
    $error=$_GET['error'];
}
?>

<body>
    <div class="wrapper">
        <?php
        include_once './includes/menu.php';
        ?>
        <div class="main-panel">
        <?php
        
        include_once './includes/navbar.php';
        ?>

<head>
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
                                    <a href="./index.php" id="login-form-link">Login</a>
                                </div>
                                <div class="col-xs-6">
                                    <a href="./register.php" class="active" id="register-form-link">Register</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="panel-body">
                       <?php if(isset($_GET['error'])){echo '<div class="alert alert-danger">'  .$error. '</div>';}?>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="register-form" action="./includes/process-register.php" method="post" role="form">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Username" value="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" tabindex="2"  class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="passwordConfirm" id="passwordConfirm" tabindex="2" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-sm-offset-3">
                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>