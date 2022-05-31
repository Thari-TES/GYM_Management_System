<?php
session_start();

include('include/databse.php');

require('login-config.php');


  
?>


<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Lion's Den Gym | Dashboard</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
   
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
     

        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
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


            <?php

                $get_member = "select count(id) from member_rej ";
                $run_member = mysqli_query($conn,$get_member);
                $row_member=mysqli_fetch_array($run_member);
                $allmember = $row_member['count(id)'];

                $get_staff = "select count(coachId) from coach_rej ";
                $run_staff = mysqli_query($conn,$get_staff);
                $row_staff=mysqli_fetch_array($run_staff);
                $allstaff = $row_staff['count(coachId)'];

                $get_supplement = "select count(id) from supliment ";
                $run_supplement = mysqli_query($conn,$get_supplement);
                $row_supplement=mysqli_fetch_array($run_supplement);
                $allsupplement = $row_supplement['count(id)'];

                $get_price = "select sum(price) from memfee ";
                $run_price = mysqli_query($conn,$get_price);
                $row_price=mysqli_fetch_array($run_price);
                $allprice = $row_price['sum(price)'];

            ?>

            <div class="page-inner">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo $allmember ?></p>
                                        <span class="info-box-title">Members</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-users"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p class="counter"><?php echo $allstaff  ?></p>
                                        <span class="info-box-title">Coaches</span>
                                    </div>
                                    <div class="info-box-icon">
                                    <i class="fas fa-user-friends"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                        <p><span class="counter"><?php echo  $allsupplement ?></span></p>
                                        <span class="info-box-title">Suppliments</span>
                                    </div>
                                    <div class="info-box-icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel info-box panel-white">
                                <div class="panel-body">
                                    <div class="info-box-stats">
                                    <p><span class="counter"><?php echo  $allprice ?></span></p>
                                        <span class="info-box-title">Total Income</span>
                                    </div>
                                    <div class="info-box-icon">
                                    <i class="fas fa-money-check-alt"></i>
                                    </div>
                                    <div class="info-box-progress">
                                        <div class="progress progress-xs progress-squared bs-n">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <div class="row">
                                            <div class="col-sm-10" style="margin-left:40%;">
                                                   
                                            <h4 class="panel-title">Lions Den Gym</h4>
           
                                                </div>
     
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Member Pending payment Details</h4>
                                </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                        <table id="example3" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Name</th>
                                                <th>Contact No</th>
                                                <th>Address</th>
                                                <th>Package</th>
                                                <th>Status</th>
                                             
 
                                            </tr>
                                        </thead>
                                   
                                        <tbody>
                                                                                
                                             <?php
                                                   $i = 0;
                                     
                                                   $get_pro = "select id,fname,lname,contactNo,address,package  from member_rej  WHERE NOT EXISTS(SELECT * from memfee  WHERE member_rej.id=memfee.id AND memfee.id)  ";
                                     
                                                       $run_pro = mysqli_query($conn, $get_pro);
                                                     while ($row_pro = mysqli_fetch_array($run_pro)) {
                                                                             
                                                    $fname = $row_pro['fname'];
                                                    $lname = $row_pro['lname'];
                                                    $contactNo = $row_pro['contactNo'];
                                                    $address = $row_pro['address']; 
                                                    $package = $row_pro['package'];
                                                    $id   = $row_pro['id'];                     
                                     
                                                    $i++;
                                     
                                                 ?>
                                     
                                            <tr>
                                     
                                            <td><?php echo $i; ?></td>
                                     
                                            <td><?php echo $fname." ".$lname; ?></td>
                                             <td><?php echo $contactNo; ?></td>
                                             <td><?php echo $address; ?></td>
                                             <td><?php echo $package; ?></td>
                                            <td><span class="label label-info">Pending</span></td>
                                            
                                       
                                     
                                         </tr>
                                     
                                       <?php 
                                         } ?>
                                                                             
                                                                                
                                         </tbody>
                                       </table>  
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- Row -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Reminders</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Note No</th>
                                                <th>Note</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                        <?php

                                            $i = 0;

                                            $get_pro = "select *  from reminder";

                                            $run_pro = mysqli_query($conn, $get_pro);

                                            while ($row_pro = mysqli_fetch_array($run_pro)) {

                                                            $note = $row_pro['note'];
                                                        
                                                            $date = $row_pro['date'];
                                                            
                                                            $id   = $row_pro['note_id'];                     

                                                        
                                                        
                                                            $i++;

                                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td> 
                                                <td><?php echo $note; ?></td>
                                                <td><?php echo $date; ?></td>
                                                <td><span class="label label-warning">Waiting</span></td>
                                                        
                                         


                                            </tr>

                                            <?php 
                                            } ?>

                         
                                            
                                          
                                        </tbody>
                                       </table>  
                                    </div>
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
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>

        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/plugins/jquery-counterup/jquery.counterup.min.js"></script>

      
        <script src="assets/js/modern.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        
        
    </body>
</html>

<?php 


?>