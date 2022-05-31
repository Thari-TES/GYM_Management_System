<?php

    session_start();
    require("include/databse.php");

    if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])){

        $username = mysqli_real_escape_string( $conn,$_POST['username']);
        $email =  (mysqli_real_escape_string( $conn,$_POST['email']));
        $password =  (mysqli_real_escape_string( $conn,$_POST['password']));

        $query = "SELECT  `email`, `password` ,`username`,`user_type` FROM `user` WHERE `username`='$username' AND `password`='$password'";

        $result = $conn->query($query);
        $userData = $result->fetch_assoc();

       if($result->num_rows == 1){
           $_SESSION['userName'] =  $userData['username'];
        //    $_SESSION['userEmailForAvatar'] =  $userData['email'];
           $_SESSION['userType'] =  $userData['user_type'];
           $_SESSION['loggedin'] =  true;
           header('Location:index.php');
       }else{
           $_SESSION['loginError'] = "Incorrect";
           header('location:admin_login.php');
       }

    }

  
     


              


?>

<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Admin Login </title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
 
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>

        
        <!-- Theme Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>

    
    </head>
    <body class="page-login">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <div class="logo-image">
                                    <img src="assets/images/logo1.png" alt="" width="100px" height="100px">
                                 </div>
                                <a href="" class="logo-name text-lg text-center">Lion's Den Gym</a>
                                <p class="text-center m-t-md">Please login into Admin account.</p>
                                <div class="logo-gif">
                                   <img src="assets/images/gif1.gif" alt="" width="200px" height="200px">
                                </div>

                                <form class="m-t-md" name="form" method="post" action="<?php $_SERVER["PHP_SELF"];?>" id="form" >
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="User Name"  name="username" id="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email"  name="email" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password"  name="password" id="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                    <!-- <a href="" class="display-block text-center m-t-md text-sm">Forgot Password?</a> -->
                                    <a href="user_login.php" class="btn btn-default btn-block m-t-md">Login as a User</a>
                                </form>
                                <p class="text-center m-t-xs text-sm">2021 &copy; Create by CodeBusters.</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/form-elements.js"></script>
        
        
    </body>
</html>