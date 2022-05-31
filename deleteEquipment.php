<?php

session_start();
include "include/databse.php";
require('login-config.php');
?>


<?php

if(isset($_GET['deleteeq'])){

$delete_id = $_GET['deleteeq'];

$delete_pro = "delete from equipment where id='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Equipment Has been deleted')</script>";

echo "<script>window.open('viewEquipment.php?viewEquipment','_self')</script>";

}

}

?>

