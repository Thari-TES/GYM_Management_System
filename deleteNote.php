<?php
session_start();
include "include/databse.php";
require('login-config.php');
?>


<?php

if(isset($_GET['deleteNote'])){

$delete_id = $_GET['deleteNote'];

$delete_pro = "delete from reminder where id='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Note Has been deleted')</script>";

echo "<script>window.open('Reminder.php?Reminder','_self')</script>";

}

}

?>

