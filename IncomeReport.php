<?php
session_start();
include "include/databse.php";
require('login-config.php');


?>

<!DOCTYPE html>
<html>
    <head>

    <script>
         var flot1 = function () {
        var data = [[0, 20], [1, 20], [2, 25], [3, 24], [4, 50], [5, 18], [6, 0], [7, 4], [8, 3], [9, 18], [10, 1], [11, 50],];
        var dataset = [{
            data: data,
            color: "#22BAA0"
        }];
        var ticks = [[0, "January"], [1, "February"], [2, "March"], [3, "April"], [4, "May"], [5, "June"], [6, "July"], [7, "August"], [8, "September"], [9, "October"], [10, "November"], [11, "December"]];

        var options = {
            series: {
                bars: {
                    show: true
                }
            },
            bars: {
                align: "center",
                barWidth: 0.2
            },
            xaxis: {
                ticks: ticks
            },
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "X: %x, Y: %y",
                defaultTheme: false
            }
        };
        $.plot($("#flot1"), dataset, options);
    }
    </script>
        
        <!-- Title -->
        <title>Lion's Den Gym | Income Reports</title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Lion's Den Gym Dashboard" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Code busters 2021" />
        
           <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <script src="https://kit.fontawesome.com/830935a74c.js" crossorigin="anonymous"></script>
        <link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	       
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


            <div class="page-inner" >
                <div class="page-title">
                    <h3>Flotchart</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Reports</a></li>
                            <li class="active">Income Reports</li>
                        </ol>
                    </div>
                </div>
                <div id="printdiv">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                <div class="col-sm-10" style="margin-left:40%;">
                                                   
                                                   <h4 class="panel-title">Inccome Reports</h4>
                  
                                                       </div>
            
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Income Report</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="flot1"></div>
                                </div>
                            </div>
                        </div>
                  
                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Member Fee</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Date</th>                     
                                                <th>Payment</th>
                                     
                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                                <th>Date</th>                     
                                                <th>Payment</th>
                                        
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php
                                                   $i = 0;
                                     
                                                   $get_pro = "select *  from memfee order by date";
                                     
                                                       $run_pro = mysqli_query($conn, $get_pro);
                                                     while ($row_pro = mysqli_fetch_array($run_pro)) {
                                                                             
                                                    $mname = $row_pro['mname'];
                                                    $date = $row_pro['date'];
                                                    $price = $row_pro['price'];
                                                    $id   = $row_pro['id'];                     
                                     
                                                    $i++;
                                     
                                                 ?>
                                     
                                            <tr>
                                     
                                          
                                             <td><?php echo $mname; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $price; ?></td> 
                                            
                                       
                                     
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

                    </div><!-- Row -->


                    <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Payment for Coaches</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Month</th>
                                                <th>Date</th>                     
                                                
                                                <th>Salary Payment</th>
                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Name</th>
                                                <th>Month</th>
                                                <th>Date</th>                     
                                           
                                                <th>Salary Payment</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php
                                                   $i = 0;
                                     
                                            
                                                   $get_pro = "select *  from coachfee order by date";
                                     
                                                       $run_pro = mysqli_query($conn, $get_pro);
                                                     while ($row_pro = mysqli_fetch_array($run_pro)) {
                                                                             
                                                    $mname = $row_pro['cname']; 
                                                    $month = $row_pro['month'];
                                                    $date = $row_pro['date'];
                                                    $price = $row_pro['price'];                 
                                     
                                                    $i++;
                                     
                                                 ?>
                                     
                                            <tr>
                                     
                                           <!-- <td><?php echo $i; ?></td> -->
                                             <td><?php echo $mname; ?></td>
                                        
                                             <td><?php echo $month; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $price; ?></td> 
                                            
                                       
                                     
                                         </tr>
                                     
                                       <?php 
                                         } ?>
                                           
                                        </tbody>
                                       </table>  





                                       
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Bills</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Bill Name</th>
                                                <th>Date</th>                     
                                                <th>Payment</th>
                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>No</th>
                                            <th>Bill Name</th>
                                                <th>Date</th>                     
                                                <th>Payment</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php
                                                   $i = 0;
                                     
                                                   $get_pro = "select *  from bill order by date";
                                      
                                                       $run_pro = mysqli_query($conn, $get_pro);
                                                     while ($row_pro = mysqli_fetch_array($run_pro)) {
                                                                             
                                                    $mname = $row_pro['purpose']; 
                                                    $date = $row_pro['date'];
                                                    $price = $row_pro['price'];
                                                    $id   = $row_pro['i_no'];   
                                                          
                                     
                                                    $i++;
                                     
                                                 ?>
                                     
                                            <tr>
                                     
                                           <td><?php echo $i; ?></td>
                                             <td><?php echo $mname; ?></td>
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $price; ?></td> 
                                            
                                       
                                     
                                         </tr>
                                     
                                       <?php 
                                         } ?>
                                           
                                        </tbody>
                                       </table>  





                                       
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                
                            </div>
                        </div>
                    </div><!-- Row -->
                    
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Suppliment Payment</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Suppliment Name</th>
                                                <th>Date</th>                     
                                                <th>Payment</th>
                                      
                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Suppliment Name</th>
                                                <th>Date</th>                     
                                                <th>Payment</th>
                                      
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            
                                        <?php
                                                   $i = 0;
                                     
                                                   $get_pro = "select *  from sup_payment order by date";
                                     
                                                       $run_pro = mysqli_query($conn, $get_pro);
                                                     while ($row_pro = mysqli_fetch_array($run_pro)) {
                                                                             
                                                    $mname = $row_pro['mname'];
                                                    $package = $row_pro['supname'];
                                                   
                                                    $date = $row_pro['date'];
                                                    $price = $row_pro['price'];
                                                                    
                                     
                                                    $i++;
                                     
                                                 ?>
                                                 
                                     
                                            <tr>
                                     
                                           <!-- <td><?php echo $i; ?></td> -->
                                             <td><?php echo $mname; ?></td>
                                             <td><?php echo $package; ?></td>
                                          
                                            <td><?php echo $date; ?></td>
                                            <td><?php echo $price; ?></td> 
                                            
                                       
                                     
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
                    
       
                   <div class="row print" id="printdiv" >
                        <div class="col-md-5" >
                        <button type="button" class="btn btn-primary " name="print" id="print"  onclick="print()"> Print  <i class="fa fa-print"></i></button>
                        </div> 
                        </div> 
                      
                        </div>
                                     

       
                        <script>
            function print() {
            const element = document.getElementById('printdiv')
            html2pdf().from(element).toPdf().save('bill.pdf')
        }
</script> 


        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        <script src="assets/js/pages/charts-flot.js"></script>
        <script src="assets/js/pages/table-data.js"></script>
        <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="assets/js/html2pdf.bundle.min.js"></script>
        

  

    </body>
</html>