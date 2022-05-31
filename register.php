<?php

session_start();
include "include/databse.php";

?>



<!DOCTYPE html>
<html>
    <head>
    <script>
   
   //user name check
   function checkUsName(){
       const uname     = document.getElementById('uname');
       const unameValue =  uname.value.trim(); 
       let unameError   =   document.getElementById("usernameerror");

        // user name validation
       if (unameValue === ''){
       // if blank
           unameError.textContent = "user name cannot be blank!";
           unameError.style.color = "#ff1617";
           console.log('user name blank');
           return false;
          
        }
       else if (!/[^a-zA-Z0-9]/.test(unameValue)){
       // enters a valid character
            unameError.textContent = "";
        
           return true;
       }
       else{
           //enters an invalid character
           
           unameError.style.color = "#ff1617";
           unameError.textContent = "user name cannot have space and special characters!";
           return false;
       }
   }

   function checkemail() {



   let name = document.getElementById("email").value;
   let output = document.getElementById("emailError");
   if (name === ''){
               // if blank
                   output.textContent = "Email cannot be blank!";
                   output.style.color = "#ff1617";
                   console.log('Email blank');
                   return false;
                   
       }
       else if (!/\S+@\S+\.\S+/.test(name)){
           //enters an illegal character
           output.style.color = "#ff1617";
       output.textContent = "Enter Valid Email!"
       return false;
           
       }
       else{
       
           output.style.color = "#52b69a";
       output.textContent = "Valid Email!"
       return true;
           
       }

   }


   
   //password check
   function checkpassword(){
       const password     = document.getElementById('password');
       const passwordValue =  password.value.trim(); 
       let passwordError   =   document.getElementById("passError");

        // user name validation
       if (passwordValue === ''){
       // if blank
           passwordError.textContent = "password cannot be blank!";
           passwordError.style.color = "#ff1617";
           console.log('user name blank');
           return false;
           
        }
    //    else if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}/.test(passwordValue)){
    //    // enters a valid character
    //         passwordError.style.color = "#ff1617";
    //        passwordError.textContent = "password cannot have space and special characters!";
    //        return false;
    //    }
       else{
           //enters an invalid character
           
           passwordError.textContent = "";
           return true ;
       }
   }
   
   // confirm password check
   function checkCpassword(){
       const Cpassword     = document.getElementById('Cpassword');
       const CpasswordValue =  Cpassword.value.trim(); 
       let passwordError   =   document.getElementById("cpassError");

        // user name validation
       if (CpasswordValue === ''){
       // if blank
           passwordError.textContent = "password cannot be blank!";
           passwordError.style.color = "#ff1617";
           console.log('CpasswordValue blank');
           return false;
           
        }
    //    else if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}/.test(CpasswordValue)){
    //    // enters a valid character
    //     passwordError.style.color = "#ff1617";
    //        passwordError.textContent = "password cannot have space and special characters!";
    //        return false;
    //    }
       else{
           //enters an invalid character
           
           passwordError.textContent = "";
           return true;
       }
   }

   //admin password check
   function checkApassword(){
       const Apassword     = document.getElementById('Apassword');
       const ApasswordValue =  Apassword.value.trim(); 
       let passwordError   =   document.getElementById("apassError");

        // user name validation
       if (ApasswordValue === ''){
       // if blank
           passwordError.textContent = " Admin password cannot be blank!";
           passwordError.style.color = "#ff1617";
           console.log('CpasswordValue blank');
           return false;
           
        }
    //    else if (!/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/.test(ApasswordValue)){
    //    // enters a valid character
    //         passwordError.style.color = "#ff1617";
    //        passwordError.textContent = " Admin password cannot have space and special characters!";
    //        return false;
    //    }
       else{
           //enters an invalid character
          
           passwordError.textContent = " ";
           return true;
       }
   }
   function checkp(){
       const password     = document.getElementById('password').value;
       const Cpassword     = document.getElementById('Cpassword').value;
       let passwordError   =   document.getElementById("ggpassError");
       console.log(Cpassword);
       console.log(password);

       if(password!==Cpassword){
           
           passwordError.style.color = "#ff1617";
           passwordError.textContent = "password does not match!";
           
           return false;
       }else{
           
           passwordError.style.color = "#ff1617";
           passwordError.textContent = "";
           return true;
       }
   }


</script>

<script>
       const submit = document.querySelector('#submit');
       // function isValid(){
       //     // checkUsName();
       //     // checkApassword();
       //     // checkCpassword();
       //     // checkpassword();
       //     // checkemail();
       //     // checkp();
           

       //     if( checkUsName()&& checkp() && checkApassword() && checkCpassword() && checkpassword() && checkemail() ) {
       //         return true;
       //     }
       //     else{
       //         return false;
       //     }
       // }

       // if(submit.addEventListener) {
       //     submit.addEventListener('click', returnToPrevious);
       // } else {
       //     submit.attachEvent('onclick', returnToPrevious);
       // }

       // function returnToPrevious (e) {
       //     e = e || window.event;

       //     if(!isValid()) {
       //         //if(true) {
       //         if(e.preventDefault) {
       //             e.preventDefault();
       //             alert("user didn't Add. Please enter valid inputs.");
       //         } else {
       //             e.returnValue = false;
       //         }
       //     }
       //     console.log(isValid());
       // }
       function isValid(){
           // checkUsName();
           // checkApassword();
           // checkCpassword();
           // checkpassword();
           // checkemail();
           // checkp();
           

           if( checkUsName()&& checkp() && checkApassword() && checkCpassword() && checkpassword() && checkemail() ) {
               return true;
           }
           else{
               alert("user didn't Add. Please enter valid inputs.");
               return false;
           }
       }
     
   </script>
        
        <!-- Title -->
        <title>Lion's Den Gym | User Sign up</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Lion's Den Gym Dashboard" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="kavi_98" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>
        
        <!-- Theme Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>

        
        
    </head>
    <body class="page-register">
        <main class="page-content">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box">
                                <a href="index.html" class="logo-name text-lg text-center">Lion's Den Gym</a>
                                <p class="text-center m-t-md">Create a Lion's Den User account</p>
                                <form class="m-t-md" action="" onsubmit="return isValid()"   name="form" method="post"id="form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="uname" id="uname" placeholder="User Name" onkeyup="checkUsName()" required >
                                        <span id="usernameerror"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" onkeyup="checkemail()" required >
                                        <span id="emailError"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"  onkeyup="checkpassword()" required>
                                        <span id="passError"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="Cpassword" id="Cpassword" placeholder="Confirm Password" onkeyup="checkCpassword()" onchange="checkp()"   required>
                                        <span id="cpassError"></span>
                                        <span id="ggpassError"></span>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="Apassword" id="Apassword"  placeholder="Admin Password" onkeyup="checkApassword()" required>
                                        <span id="apassError"></span>
                                    </div>
                                    <label >
                                        <input type="checkbox" value="term">
                                        <label for="term"> Agree the terms and policy</label><br> 
                                    </label>
                                    <button type="submit" class="btn btn-success btn-block m-t-xs" name="submit" id="submit">Submit</button>
                                    <p class="text-center m-t-xs text-m">Already have an User account?</p>
                                    <a href="user_login.php" class="btn btn-default btn-block m-t-xs">Login</a>
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





    <?php






        if(isset($_POST['submit'])){

        $username = $_POST['uname'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $Apassword= $_POST['Apassword'];

        $aquary7= "SELECT password FROM `user` WHERE user_type='admin'";
        $result = $conn->query($aquary7);
        $adminpass = $result->fetch_assoc(); 
        // echo $adminpass['password'];
        // echo $Apassword;

       if($adminpass['password'] == $Apassword){
        
        $userreg = "INSERT INTO `user` ( `username`,  `email`, `password`,`user_type`) 
                            VALUES ('$username','$email','$password', 'coach')";

            
            $run_staff = mysqli_query($conn, $userreg );

        if ($run_staff) {
                echo "<script> alert('user register successfully ')</script>";
                echo "<script> window.open('user_login.php')</script>"; 
            }
            else{
                echo "<script> alert('Item Didnt Added  ')</script>";
                //   echo "Error: " . $run_staff . "<br>" . $conn->error;
            }
        }
       else{
        echo "<script> alert('Item Didnt Added, Admin password does not match! ')</script>";
       }

     }
        

        

    ?>