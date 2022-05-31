<?php

session_start();
include "include/databse.php";
require('login-config.php');
?>


<?php

if(isset($_GET['deletecoach'])){

$delete_id = $_GET['deletecoach'];

$delete_pro = "delete from coach_rej where coachid='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Coach Has been deleted')</script>";

echo "<script>window.open('viewCoach.php?viewCoach','_self')</script>";

}

}

?>

