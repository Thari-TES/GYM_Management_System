<?php
session_start();
include "include/databse.php";
require('login-config.php');
?>

<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Member Registration</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Lion's Den Gym Dashboard" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Code busters 2021" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <link href="assets/css/modern.css" rel="stylesheet" type="text/css"/>
    
     
        
     
        
    </head>
    <body class="page-header-fixed">
        <div class="overlay"></div>
        

        <main class="page-content content-wrap">
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class=" push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="index.php" class="logo-text"><span>Lion's Den</span></a>
                    </div><!-- Logo Box -->
                  
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-left d-flex justify-content-center align-items-center">
                                <li>		
                                    <a href="javascript:void(0);" class="sidebar-toggle"><i class="fa fa-bars"></i></a>
                                </li>
                                
                                <li>		
                                    <a href="javascript:void(0);" class="toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li>		
                                <a class="h4">Hi <?php echo $_SESSION['userType'] ?></a>
                                </li>
                               	
                                
                               
                                
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                
                              
                               
                        
                                <li>
                                    <a href="logout.php" class="log-out">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                               
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <div class="sidebar-header">
                        <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="assets/images/Final-01.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span>Lion's Den Gym<br><small></small></span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <ul class="menu accordion-menu">
                        <li class="active"><a href="index.php" class=" waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon "><i class="fas fa-id-card"></i></span><p>Registration</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                            <!-- <i class="fas fa-id-badge"></i> -->
                                <li><a href="MemReg.php">Member Registration</a></li>
                                <?php if($_SESSION['userType']=="Admin"){
                                    echo "<li><a href=\"CoachReg.php\">Coach Registration</a></li>";
                                    }?>
                                
                                
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fas fa-dumbbell"></i></span><p>Equipments</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="addEquipment.php">Add Equipments</a></li>
                                <li><a href="viewEquipment.php">View Equipments</a></li>
                               
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fa fa-money"></i></span><p>Payments</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="MemFee.php">Member Fee</a></li>
                                <li><a href="Bills.php">Bills</a></li>
                                <?php if($_SESSION['userType']=="Admin"){
                                    echo "<li><a href=\"CoachFee.php\">Coach Fee</a></li>";
                                    }?>
                                
                                <li><a href="SupPayment.php">Suppliment Payments</a></li>
                               
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon glyphicon-calendar"></span><p>Schedules</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="addSchedules.php">Add Schedules</a></li>
                                <li><a href="viewSchedules.php">View Schedules</a></li>
     
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fas fa-prescription-bottle"></i></span><p>Suppliments</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="addSuppliment.php">Add Suppliments</a></li>
                                <li><a href="viewSuppliments.php">View Suppliments</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#" class=" waves-button"><span class="menu-icon glyphicon"><i class="fa fa-bar-chart"></i></span><p>Reports</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                            <?php if($_SESSION['userType']=="Admin"){
                                    echo "<li><a href=\"IncomeReport.php\">Income Reports</a></li>";
                                    }?>
                               
                                <li><a href="Reminder.php">Reminder</a></li>
                                <li><a href="MemberSummary.php">Member Summary</a></li>
                                <?php if($_SESSION['userType']=="Admin"){
                                    echo "<li><a href=\"CoachSummary.php\">Coach Summary</a></li>";
                                    }?>
                               
                                <li><a href="SupSummary.php">Suppliment Summary</a></li>
                            </ul>
                        </li>
     
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->



            <div class="page-inner">
                <div class="page-title">
                    <h3>Registration</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Registration</a></li>
                            <li class="active">Member Registration Form</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Member Registration</h4>
                                </div>
                                <div class="panel-body">
                                <form class="form-horizontal" name="form" method="post" action="" id="form">
                                        
                                <div class="form-group">
                                        
                                            
                                        <div class="row">
                                            <div class="col-sm-12">
                                            
                                            <label class="col-sm-2 control-label">First Name</label>
                                                <div class="col-md-3">
                                                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" onkeyup="checkfname()" required >
                                                    <span id="fnameError"></span>
                                                </div>

                                                <label class="col-sm-2 control-label">Last Name</label>
                                               
                                                <div class="col-md-3">
                                                    <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" onkeyup="checklname()" required >
                                                    <span id="lnameError"></span>
                                                </div>
                                                
                                            </div>
                                           
                                            
                                        </div>
                                </div>

                                  

                                    <!-- <div class="form-group">
                                        <label for="input-Default" class="col-sm-6 control-label">Gender</label>
                                        <div class="gender-details">
                                        <input type="radio" name="gender" id="dot-1" value="Male" >
                                        <input type="radio" name="gender" id="dot-2" value="Female">
                                       
                                        <div class="category">
                                            <label for="dot-1">
                                            <span class="dot one"></span>
                                            <span class="gender">Male</span>
                                            </label>
                                            <label for="dot-2">
                                            <span class="dot two"></span>
                                            <span class="gender">Female</span>
                                            </label>
                                        </div>
                                        </div>
                                    </div> -->

                            <div class="row">
                                <div class="col-md-6 withgif1">
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Gender</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control m-b-sm" name="gender" id="gender" onkeyup="gender()" onchange="gender()"  required>
                                                            <option value=Male >Male</option>
                                                            <option value=Female >Female</option>
                                                            <option value=Other >Other</option>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                    <div class="form-group">
                                        <label for="input-Default" class="col-sm-4 control-label">Age</label>
                                        <div class="col-md-6">
                                            <input type="text" name="age"class="form-control" id="age" placeholder="Enter Age" onkeyup="checkage()" required >
                                            <span id="ageError"></span> 
                                        </div>
                                    </div>

                                       
                                        <div class="form-group">
                                            <label class="col-sm-4 control-label">Registration Date</label>
                                            <div class="col-sm-10 col-md-6">
                                                <input type="date"  name="regdate" class="form-control " id="regdate" onkeyup="checkRegDate()" required>   
                                                <span id="regdateError"></span>                                            
                                            </div>
                                        </div>
                                              
                                   

                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-4 control-label">NIC no</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="nic" id="nic" placeholder="Enter NIC Number" onkeyup="checkNic()" required>
                                                <span id="nicError"></span>
                                            </div>
                                        </div>
                                                <div class="form-group">
                                                    <label for="input-Default" class="col-sm-4 control-label">Weight</label>
                                                    <div class="col-md-6">
                                                     
                                                        <div class="input-group m-b-sm">
                                                        
                                                        <input type="text" class="form-control"  name="weight" id="weight" placeholder="Enter Weight" onkeyup="checkWeight()" required>
                                                        <span class="input-group-addon" id="basic">kg</span>
                                                        
                                                    </div>
                                                    <span id="weightError"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input-Default" class="col-sm-4 control-label">Height</label>
                                                    <div class="col-md-6">
                                                        
                                                        <div class="input-group m-b-sm">
                                                        
                                                            <input type="text" class="form-control"  name="height" id="height" placeholder="Enter Height" onkeyup="checkHeight()" required>
                                                            <span class="input-group-addon" id="basic-addon2">cm</span>
                                                            
                                                        </div>
                                                        <span id="heightError"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-4 control-label">Package</label>
                                                    <div class="col-sm-6">
                                                        <select class="form-control m-b-sm" name="package" id="package" onkeyup="Package()" onchange="Package()"  required>
                                                            <option value=Basic >Basic</option>
                                                            <option value=Standard >Standard</option>
                                                            <option value=Golden >Golden</option>
                                                        
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input-Default" class="col-sm-4 control-label">Mobile No</label>
                                                    <div class="col-md-6">
                                                
                                                        <div class="input-group m-b-sm">
                                                            <span class="input-group-addon" id="basic-addon2">+94</span>
                                                            <input type="text" class="form-control" name="mobile"  id="mobile" placeholder="Enter Contact Number" onkeyup="checkmobile()" required>
                                                            
                                                        
                                                        </div>
                                                        <span id="mobileError"></span>
                                                    </div>
                                                </div>

                                                </div> 
                                            <div class="col-md-4 " >
                                                <img src="assets/images/gif1.gif" height="300" class="gif1" alt="">
                                            </div> 
                                    </div> 
                                       
                                   


                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="adrs" id="adrs" placeholder="Enter Address" onkeyup="checkAdress()" required>
                                                <span id="adrsError"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-Default" class="col-sm-2 control-label">Special Notes</label>
                                            <div class="col-sm-10">
                                               
                                                <textarea name="specialn" id="specialn" class="form-control" cols="30" rows="10" placeholder="Enter Special Notes" onkeyup="checkNotes()"></textarea>
                                                <span id="notesError"></span>
                                            </div>
                                        </div>
                             
                                        
                                        
                                        <div class="row">
                                        <div class="col-sm-6" style="margin-left:40%;">
                                                   
                                                    <div class="col-md-3">
                                                    <button type="submit" class="btn btn-primary btn-rounded" name="addmember" id="addmember">Add</button>
                                                    </div>

                                                    <div class="col-md-3">
                                                    <button type="button" class="btn btn-primary btn-rounded"  onclick="reset()">Reset</button>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>

                                        
                                        </div>
                    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2021 &copy; Lion's Den  by Code-Busters.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/form-elements.js"></script>
        
    </body>
</html>

<script>

    //reset input
    function myFunction() {
            document.getElementById("form").reset();
            }

        const form      = document.getElementById('form');
        const gender    = document.getElementById('gender');    

        // gets the values from the inputs      
        const genderValue= gender.value.trim();      

        // output of errors               
        let genderError =   document.getElementById("genderError");
        

        function checkfname() {
            const fname     = document.getElementById('fname');
            const fnameValue = fname.value.trim();  
            let fnameError  =   document.getElementById("fnameError");

            //First name validation
            if (fnameValue === ''){
            //enters a valid character
                fnameError.textContent = "First name cannot be blank!";
                fnameError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z ]/.test(fnameValue)){
            //enters a valid character
                fnameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                fnameError.style.color = "#ff1617";
                fnameError.textContent = "First name cannot have Numbers!";
                return false;
            }
            
        }

        function checklname() {
            const lname     = document.getElementById('lname');
            const lnameValue = lname.value.trim(); 
            let lnameError  =   document.getElementById("lnameError");

            //Last name validation
            if (lnameValue === ''){
            // if input field is blank
                lnameError.textContent = "Last name cannot be blank!";
                lnameError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z]/.test(lnameValue)){
            //enters a valid character
                lnameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                lnameError.style.color = "#ff1617";
                lnameError.textContent = "Last name cannot have Numbers!";
                return false;
            }
           
        }

        function checkage() {
            const age       = document.getElementById('age');
            const ageValue   = age.value.trim();
            let ageError    =   document.getElementById("ageError");

            let agelength = ageValue.length;

            //Mobile number validation
            if (ageValue === ''){
            //enters a valid character
                ageError.textContent = "Age cannot be blank!";
                ageError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(ageValue)){               
                //enters an invalid character
                if( agelength > 3 || ageValue > 200 ){
                    ageError.style.color = "#ff1617";
                    ageError.textContent = "Age is invalid!";
                    return false;
                }
                else{
                    //enters a valid character
                    ageError.textContent = "";
                    return true;
                }
            }
            else{
                //enters an invalid character
                ageError.style.color = "#ff1617";
                ageError.textContent = "Age cannot have Letters!";
                return false;
            }
        }

        function checkRegDate() {
            const regdate   = document.getElementById('regdate');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("regdateError");

            if (regdateValue.length > 0) {
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a registration date!";
                return false;
            }

        }

        function checkNic(){
            const nic  = document.getElementById('nic');
            const nicValue = nic.value.trim(); 
            let nicError    =   document.getElementById("nicError");
            let niclength = nicValue.length;

            if (niclength == 0) {
                nicError.textContent = "NIC field is required!";
                nicError.style.color = "#ff1617";
                return false;
            }
            else if (niclength == 10) {
                //pattern1
                //let rgx = /^\d{9}[vxVX]{1}$/ 
               // if (nicValue.match(rgx)) {     
                if (/^\d{9}[vxVX]{1}$/.test(nicValue)){
                    nicError.textContent = "";
                    return true;
                }
                else {
                    nicError.textContent = "Invalid NIC number";
                    nicError.style.color = "#ff1617";
                    return false;
                }
            }

            else if (niclength == 12) {
                //pattern 2
                //var rgx = /^\d{12}$/; 
                //if (nicValue.match(rgx)) {   
                if (/^\d{12}$/.test(nicValue)){
                    nicError.textContent = "";
                    return true;
                }
                else {
                    nicError.textContent = "Invalid NIC number";
                    nicError.style.color = "#ff1617";
                    return false;
                }
            }
            else {
                //empty
                nicError.textContent = "Invalid NIC number";
                nicError.style.color = "#ff1617";
                return false;
            }
        }

        function checkWeight(){
            const weight    = document.getElementById('weight');
            const weightValue =  weight.value.trim(); 
            let weightError =   document.getElementById("weightError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (weightValue === ''){
            //enters a valid character
                weightError.textContent = "Weight cannot be blank!";
                weightError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(weightValue)){               
                //enters an invalid number
                if( weightValue > 800 ){
                    weightError.style.color = "#ff1617";
                    weightError.textContent = "Weight is invalid!";
                    return false;
                }
                else{
                    //enters a valid character
                    weightError.textContent = "";
                    return true;
                }
            }
            else{
                //enters an invalid character
                weightError.style.color = "#ff1617";
                weightError.textContent = "Weight cannot have Letters!";
                return false;
            }

        }

        function checkHeight(){
            const height    = document.getElementById('height');
            const heightValue =  height.value.trim(); 
            let heightError =   document.getElementById("heightError");

            if (heightValue === ''){
            //enters a valid character
                heightError.textContent = "height cannot be blank!";
                heightError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(heightValue)){               
                //enters an invalid number
                if( heightValue > 500 ){
                    heightError.style.color = "#ff1617";
                    heightError.textContent = "height is invalid!";
                    return false;
                }
                else{
                    //enters a valid character
                    heightError.textContent = "";
                    return true;
                }
            }
            else{
                //enters an invalid character
                heightError.style.color = "#ff1617";
                heightError.textContent = "height cannot have Letters!";
                return false;
            }
        }

        
        function checkmobile() {
            const mobile  = document.getElementById('mobile');
            const mobileValue = mobile.value.trim(); 
            let mobileError =   document.getElementById("mobileError");
            let moblength = mobileValue.length;

            //Mobile number validation
            if (mobileValue === ''){
            //enters a valid character
                mobileError.textContent = "Mobile cannot be blank!";
                mobileError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9+]/.test(mobileValue)){               
                //enters an invalid number
                if( moblength != 9 && moblength != 12 ){
                    mobileError.style.color = "#ff1617";
                    mobileError.textContent = "Mobile Number is invalid!";
                    return false;
                }
                else{
                    //enters a valid character
                    mobileError.textContent = "";
                    return true;
                }
            }
            else{
                //enters an invalid character
                mobileError.style.color = "#ff1617";
                mobileError.textContent = "Mobile Number cannot have Letters!";
                return false;
            }
            
        }

        function checkAdress(){
            const adrs      = document.getElementById('adrs');
            const adrsValue =  adrs.value.trim(); 
            let adrsError   =   document.getElementById("adrsError");

             // Address validation
            if (adrsValue === ''){
            // if blank
                adrsError.textContent = "Address cannot be blank!";
                adrsError.style.color = "#ff1617";
                return false;
                console.log('address blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(adrsValue)){
            // enters a valid character
                adrsError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                adrsError.style.color = "#ff1617";
                adrsError.textContent = "Address cannot have special characters!";
                return false;
            }
        }
         

        function checkNotes(){
            const notes   = document.getElementById('specialn');
            const notesValue = notes.value.trim(); 
            let notesError    =   document.getElementById("notesError"); 

             // Notes validation
             if (notesValue === ''){
            // if blank
                notesError.textContent = "Special notes cannot be blank!";
                notesError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^a-zA-Z ]/.test(notesValue)){
            // enters a valid character
                notesError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                notesError.style.color = "#ff1617";
                notesError.textContent = "Special notes cannot have special characters!!";
                return false;
            }
        }
    
    </script>      
    <script>
            const submit = document.querySelector('#addmember');
            function isValid(){

                if(checkfname() && checklname() && checkage() && checkRegDate() && checkNic() && checkWeight() && checkHeight() && checkmobile() && checkAdress() && checkNotes() ) {
                    return true;
                }
                else{
                    return false;
                }
            }

            if(submit.addEventListener) {
                submit.addEventListener('click', returnToPrevious);
            } else {
                submit.attachEvent('onclick', returnToPrevious);
            }

            function returnToPrevious (e) {
                e = e || window.event;

                if(!isValid()) {
                    //if(true) {
                    if(e.preventDefault) {
                        e.preventDefault();
                        alert("Member didn't Add. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
    </script>
        
        <?php 

            if(isset($_POST['addmember'])){

                $fname = $_POST['fname'];
                $lname= $_POST['lname'];
                $age= $_POST['age'];
                $gender= $_POST['gender'];
                $contactNo= $_POST['mobile'];
                $nic= $_POST['nic'];
                $address= $_POST['adrs'];
                $reg_date= $_POST['regdate'];
                $weight= $_POST['weight'];
                $height= $_POST['height'];
                $bmi= $weight / ($height * $height);
                $package= $_POST['package'];
                $specialn= $_POST['specialn'];
                    
                // if(isValid == 'false'){
                //     console.log('false');
                //     echo "<script> alert('Member registration Failed! invalid input fields ')</script>";
                // }
                // else{  

                    $memreg = "INSERT INTO `member_rej` ( `fname`, `lname`, `gender`, `age`, `contactNo`, `nic`, `address`, `reg_date`, `weight`, `height`,`bmi`, `package`, `special_notes`) 
                                        VALUES ('$fname','$lname','$gender','$age','$contactNo','$nic','$address','$reg_date','$weight','$height','$bmi','$package','$specialn')";

                        
                        $run_staff = mysqli_query($conn, $memreg );

                    if ($run_staff) {
                            echo "<script> alert('Member Added successfully your Member id is')</script>";
                            echo "<script> window.open('index.php')</script>"; 
                    }
                    else{
                            echo "<script> alert('Member Didn't Add  ')</script>";

                    }
                // }


                //  if ($conn->query( $run_staff) == TRUE) {
                //   echo "New record created successfully";
                //  } else {
                //    echo "Error: " . $run_staff . "<br>" . $conn->error;
                //   }
                //   }
                //     else{

                //       echo "<script> alert('child Didnt Added  ')</script>";
                //    }
            }
        ?>
        

