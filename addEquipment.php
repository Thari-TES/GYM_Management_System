<?php
session_start();
include "include/databse.php";

require('login-config.php');
?>



<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Add Equipments</title>
        
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
        
        <!-- Theme Styles -->
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
                    <h3>Equipments</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Equipments</a></li>
                            <li class="active">Add Equipments Form</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Add Equipments</h4>
                                </div>
                                <div class="panel-body">
                                <form class="form-horizontal" name="form" method="post" action="" id="form">    
                                        
                                    <div class="row">
                                        <div class="col-md-6 withgif">

                                            <div class="form-group">
                                                    <label for="ename" class="col-sm-3 control-label">Equipment Name</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter Equipment Name" onkeyup="checkEqName()" required >
                                                        <span id="eqNameError"></span>
                                                    </div>
                                                </div>
                                                    
                                                    

                                            
                                                <div class="form-group">
                                                    <label for="amount" class="col-sm-3 control-label">Amount</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter Amount" onkeyup="checkAmount()" required >
                                                        <span id="amountError"></span>
                                                    </div>
                                                </div>

                                            <div class="form-group">
                                                    <label class="col-sm-3 control-label">Date </label>
                                                    <div class="col-sm-10 col-md-6">
                                                        <input type="date" name="date" id="date" class="form-control " onkeyup="checkRegDate()" required >
                                                        <span id="regDateError"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="description" class="col-sm-3 control-label">Description</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="description" id="description" placeholder="Enter Description" onkeyup="checkDescription()" required >
                                                        <span id="descriptError"></span>
                                                    </div>
                                                </div> 
                                                
                                        </div> 
                                            <div class="col-md-4 " >
                                                <img src="assets/images/2.gif" height="300" class="gif" alt="">
                                            </div> 
                                    </div> 
                                       
                                       
                                        
                                        
                                        <div class="row">
                                        <div class="col-sm-6" style="margin-left:40%;">
                                                   
                                                    <div class="col-md-3">
                                                    <button type="submit" name="addeq" id="addeq" class="btn btn-primary btn-rounded">Add</button>
                                                    </div>

                                                    <div class="col-md-3">
                                                    <button type="button" class="btn btn-primary btn-rounded" onclick="reset()">Reset</button>
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
            function reset() {
            document.getElementById("form").reset();
            }
    
        //Equiname check
        function checkEqName(){
            const ename      = document.getElementById('ename');
            const enameValue =  ename.value.trim(); 
            let enameError   =   document.getElementById("eqNameError");

             // Equiname validation
            if (enameValue === ''){
            // if blank
                enameError.textContent = "Equipment name cannot be blank!";
                enameError.style.color = "#ff1617";
                return false;
                console.log('Equipment name blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(enameValue)){
            // enters a valid character
                enameError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                enameError.style.color = "#ff1617";
                enameError.textContent = "Equipment name cannot have special characters!";
                return false;
            }
        }

        //Amount validation
        function checkAmount(){
            const amount    = document.getElementById('amount');
            const amountValue =  amount.value.trim(); 
            let amountError =   document.getElementById("amountError");
            //let weightlength = ageValue.length;

            //Mobile number validation
            if (amountValue === ''){
            //enters a valid character
                amountError.textContent = "Amount is required*!";
                amountError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(amountValue)){    
                // enters a valid character
                amountError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                amountError.style.color = "#ff1617";
                amountError.textContent = "Amount cannot have Letters!";
                return false;
            }
        }

        //regdate
        function checkRegDate() {
            const regdate   = document.getElementById('date');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("regDateError");

            if (regdateValue.length > 0) {
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a registration date!";
                return false;
            }
        }

        //description
        function checkDescription(){
            const descrip      = document.getElementById('description');
            const descripValue =  descrip.value.trim(); 
            let descripError   =   document.getElementById("descriptError");

             // Address validation
            if (descripValue === ''){
            // if blank
                descripError.textContent = "Description is required*!";
                descripError.style.color = "#ff1617";
                return false;
                console.log('descript. blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(descripValue)){
            // enters a valid character
                descripError.textContent = "";
                return true;
            }
            else{
                //enters an invalid character
                descripError.style.color = "#ff1617";
                descripError.textContent = "Description cannot have special characters!";
                return false;
            }
        }

    </script>

    <script>
            const submit = document.querySelector('#addeq');
            function isValid(){

                if( checkEqName() && checkAmount() && checkRegDate() && checkDescription() ) {
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
                        alert("Equipment didn't Add. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
        </script>



    <?php
        if(isset($_POST['addeq'])){

        $ename = $_POST['ename'];
        $amount= $_POST['amount'];
        $date= $_POST['date'];
        $description= $_POST['description'];
        

        $memreg = "INSERT INTO `equipment` ( `ename`,  `amount`, `date`, `description`) 
                            VALUES ('$ename','$amount','$date','$description')";

            
            $run_staff = mysqli_query($conn, $memreg );

        if ($run_staff) {
                echo "<script> alert('ITEM Added successfully ')</script>";
                echo "<script> window.open('addEquipment.php')</script>"; 
            }
            else{
                echo "<script> alert('Item Didnt Added  ')</script>";
                //   echo "Error: " . $run_staff . "<br>" . $conn->error;
            }
        }

    ?>