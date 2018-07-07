<?php
require "includes/common.php";
$email=$_SESSION['email'];
if (!isset($_SESSION['email'])) 
    { 
    header('location: index.php'); 
    }
$old_password =($_POST['old_password']);
$new_password =($_POST['new_password']);
$re_type_new_password =($_POST['re_type_new_password']);
if(strlen($new_password)!=strlen($re_type_new_password))
{
    header('location: setting.php?password_error= New passwords do not match.');
}
 else 
{
     if (strlen($new_password) < 6) {
header('location: setting.php?password_error=New password should have at-least 6 characters.');
}
    else
    {
        $old_password = MD5($old_password);
        $new_password = MD5($new_password);
        $re_type_new_password = MD5($re_type_new_password);

$select_query = "select password from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($select_query_result);
$pass=$row['password'];
if($pass==$old_password)
{
$update_query = "update users set password ='$new_password'  where email='$email'";
$update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
header('location: setting.php?password_success=Password updated successfully.');

}
else
    {
header('location: setting.php?password_error=Old password does not match.');
}
}
}
?>