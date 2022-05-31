<?php
session_start();
include "include/databse.php";
require('login-config.php');
?>



<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Bill</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
 
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>
        <script src="assets/js/html2pdf.bundle.min.js"></script>
        
        
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
                        <a href="index.html" class="logo-text"><span>Lion's Den</span></a>
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
                    <h3>Payments</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#">Payments</a></li>
                            <li class="active">Bills</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Bills</h4>
                                </div>
                                <div class="panel-body">
                                <form class="form-horizontal" name="form" method="post" action="" id="form">     
                                        
                                    
                                    <div class="row">
                                        <div class="col-md-6 withgif">
                                            <div class="form-group ">
                                                    <label for="ename" class="col-sm-2 control-label">Purpose</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Enter purpose" onkeyup="checkPurpose()" required >
                                                        <span id="purposeError"></span>
                                                    </div>
                                                </div>

                                                 <div class="form-group ">
                                                    <label class="col-sm-2 control-label">Date </label>
                                                    <div class="col-sm-10 col-md-6">
                                                        <input type="date" name="date" id="date" class="form-control " onkeyup="checkDate()" onchange="checkDate()" required >
                                                        <span id="DateError"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group ">
                                                    <label for="description" class="col-sm-2 control-label">Price</label>
                                                    <div class="col-md-6">
                                                        <div class="input-group m-b-sm">
                                                                <span class="input-group-addon" id="basic-addon2">LKR .</span>
                                                                <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" onkeyup="checkPrice()" required >
                                                        </div>
                                                        <span id="priceError"></span>
                                                    </div>
                                                </div> 
                                        </div> 
                                        <div class="col-md-4 " >
                                        <img src="assets/images/5.gif"  class="gif" alt="">
                                        </div> 
                                        </div> 
                                        
                                        
                                        <div class="row">
                                        <div class="col-sm-6" style="margin-left:20%;">
                                                   
                                                    <!-- <div class="col-md-3">
                                                    <button type="submit" name="addbill" id="addbill" class="btn btn-primary btn-rounded">Add To Bill</button>
                                                    </div> -->

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
                    <div class="row" id="printdiv">
                        <div class="invoice col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="row print-container">
                                        <div class="col-md-4">
                                            <h1 class="m-b-md"><b>Lion's Den Gym</b></h1>
                                            <address>
                                                No.56/8, Colombo Road, Alawwa.<br>
                                                Contact No: 077-262 8585
                                            </address>
                                        </div>
                                        <div class="col-md-8 text-right">
                                            <h1>INVOICE</h1>
                                            
                                        </div>
                                        <div class="col-md-12">
                                            <hr>
                                            <p>
                                                <strong>Invoice to</strong><br>
                                               
                                            </p>
                                        </div>
                                        <div class="col-md-12">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>Purpose</th>
                                                        <th>Date</th>
                                                        <th>Price (LKR)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12</td>
                                                        <td><span id="purpose1"></span></td>
                                                        <td><span id="date1"></span></td>
                                                        <td><span id="price1"></span></td>
                                                    </tr>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Thank you !</h3>
                                            <p>Nullam quis risgnis dit magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            
                                        </div>
                                        <div class="col-md-4">
                                            <div class="text-right">
                                                <hr>
                                                <h4 class="no-m m-t-md text-success">Total</h4>
                                                <h1 class="no-m text-success">LKR.<span id="price2"></span> </h1>
                                                <hr>
                                                
                                            </div>
                                        </div>
                                    </div><!--row-->
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <div class="row print">
                        <div class="col-md-5">
                        <button type="button" class="btn btn-primary " name="print" id="print"  onclick="print()"> Print  <i class="fa fa-print"></i></button>
                        
                        </div>
                        <div class="col-md-5">
                        <button type="submit" form="form" name="addbill" id="addbill" class="btn btn-primary"  >Save  </button>
                       
                        </div>
                    </div>
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p class="no-s">2021 &copy; Lion's Den  by Code-Busters.</p>
                </div>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
        

        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
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
    
        //purpose check
        function checkPurpose(){
            const ename      = document.getElementById('purpose');
            const enameValue =  ename.value.trim(); 
            let enameError   =   document.getElementById("purposeError");

             // purpose validation
            if (enameValue === ''){
            // if blank
                enameError.textContent = "Purpose name cannot be blank!";
                enameError.style.color = "#ff1617";
                return false;
                console.log('Equipment name blank');
             }
            else if (/^[a-zA-Z0-9\/\s,.]+$/.test(enameValue)){
            // enters a valid character
                enameError.textContent = "";
                var x = document.getElementById("purpose").value;
                document.getElementById("purpose1").innerHTML = x;
                return true;
            }
            else{
                //enters an invalid character
                enameError.style.color = "#ff1617";
                enameError.textContent = "Purpose name cannot have special characters!";
                return false;
            }
        }

        //Price validation
        function checkPrice(){
            const price    = document.getElementById('price');
            const priceValue =  price.value.trim(); 
            let priceError =   document.getElementById("priceError");
            //let weightlength = ageValue.length;

            //Price validation
            if (priceValue === ''){
            //enters a valid character
                priceError.textContent = "Price is required*!";
                priceError.style.color = "#ff1617";
                return false;
            }
            else if (!/[^0-9]/.test(priceValue)){    
                // enters a valid character
                priceError.textContent = "";
                var x = document.getElementById("price").value;
                document.getElementById("price1").innerHTML = x;
                document.getElementById("price2").innerHTML = x;
                return true;
            }
            else{
                //enters an invalid character
                priceError.style.color = "#ff1617";
                priceError.textContent = "Price cannot have Letters!";
                return false;
            }
        }

        //regdate
        function checkDate() {
            const regdate   = document.getElementById('date');
            const regdateValue = regdate.value.trim(); 
            let regdateError =   document.getElementById("DateError");

            if (regdateValue.length > 0) {
                var x = document.getElementById("date").value;
                document.getElementById("date1").innerHTML = x;
                return true;
            }
            else {
                regdateError.style.color = "#ff1617";
                regdateError.textContent = "Select a registration date!";
                return false;
            }
        }

        function print() {
            const element = document.getElementById('printdiv')
            html2pdf().from(element).toPdf().save('bill.pdf')

        }

      

    </script>

    <script>
            const submit = document.querySelector('#addbill');
            function isValid(){

                if( checkPurpose() && checkPrice() && checkDate() ) {
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
                        alert("Bill didn't Add. Please enter valid inputs.");
                    } else {
                        e.returnValue = false;
                    }
                }
                console.log(isValid());
            }
        </script>



    <?php
        if(isset($_POST['addbill'])){

        $purpose = $_POST['purpose'];
        $price= $_POST['price'];
        $date= $_POST['date'];
     

        $addbill = "INSERT INTO `bill` ( `purpose`,  `price`, `date`) 
                            VALUES ('$purpose','$price','$date')";

            
            $run_staff = mysqli_query($conn, $addbill );

        if ($run_staff) {
                echo "<script> alert('Bill Added successfully ')</script>";
                // echo "<script> window.open('bill.php')</script>"; 
            }
            else{
                echo "<script> alert('Bill Didnt Added  ')</script>";
                //   echo "Error: " . $run_staff . "<br>" . $conn->error;
            }
        }

    ?>