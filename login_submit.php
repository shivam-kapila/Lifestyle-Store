<?php
require "includes/common.php";
$email = $_POST['email'];
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password=MD5($password);
$select_query = "select id, email from users where email='$email'and password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0)
{
header('location: login.php?login_error=Invalid User Credentials!');

}
 else 
{
$row = mysqli_fetch_array($select_query_result);
$_SESSION['id']=$row['id'];
$_SESSION['email']=$row['email']; 
header('location: products.php'); 
}
?>