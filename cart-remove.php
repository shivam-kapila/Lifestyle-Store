<?php
require "includes/common.php";
$user_id =$_SESSION['id'];
$id=$_GET['id'];
$select_query = "delete from users_items where id='$id' and user_id='$user_id'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
header('location: cart.php'); 
?>
