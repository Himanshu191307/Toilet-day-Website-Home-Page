<?php
 include('include/confing.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hygienethatempowers Admin Panel</title>
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            .forgot-password{float: right;color: blue;margin-right: 10px;margin-top: 5px;padding: 5px;font-weight: 600;}
            .forgot-password:hover{text-decoration-line: underline;color: blue;}
        </style>
    </head>
    <body style="background-color: wheat;">
        <div class="login-wrapper">
            <div class="container-center">
                <?php
                if(@$_REQUEST['logout']=="success"){
                    echo('<span style="color:red;font-size:18px;font-weight:600;">Logout Successfully...!!</span>');
                    }
                ?>             
            <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="admin_action.php" id="loginForm" novalidate>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Username" title="Please enter you username" name="username" id="username" class="form-control" autocomplete="off">
                               <!-- <span class="help-block small">Your unique username to app</span>-->
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="********" name="password" id="password" class="form-control" autocomplete="off">
                               <!-- <span class="help-block small">Your strong password</span>-->
                            </div>
                            <div>
                                <button type="submit" name="admin-login" class="btn btn-add">Login</button>
                                <!--<a class="btn btn-add" href="dashboard.php">Login</a>-->
                                <!--<a href="forget-password.php" class="forgot-password">Forgot Password ?</a>-->
                            </div><br>
                            <?php
                             if(@$_REQUEST['er']=="101"){
                                echo('<span style="color:red;font-weight:600;">Please enter your username & password   !!</span>');
                             }
                             if(@$_REQUEST['error']=="404"){
                                echo('<span style="color:red;font-weight:600;">Invalid username & password   !!</span>');
                             }
                            ?>
                        </form>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>