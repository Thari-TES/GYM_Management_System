<?php

session_start();
include "include/databse.php";
require('login-config.php');
?>


<?php

if(isset($_GET['deletemem'])){

$delete_id = $_GET['deletemem'];

$delete_pro = "delete from member_rej where id='$delete_id'";

$run_delete = mysqli_query($conn,$delete_pro);

if($run_delete){

echo "<script>alert('One Member Has been deleted')</script>";

echo "<script>window.open('viewMember.php?viewMember','_self')</script>";

}

}

?>

