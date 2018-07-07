<?php
require "includes/common.php";
$name = $_POST['name'];
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];
$name = mysqli_real_escape_string($con, $name);
$password = mysqli_real_escape_string($con, $password);
$contact = mysqli_real_escape_string($con, $contact);
$city = mysqli_real_escape_string($con, $city);
$address = mysqli_real_escape_string($con, $address);
$password=MD5($password);
$select_query = "select id from users where email='$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)>0)
{
echo "Email ID already exists.";
}
 else 
{
$insert_query = "insert into users(name, email, password, contact, city, address) values ('$name', '$email', '$password', '$contact', '$city','$address')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
echo "User successfully inserted";
$_SESSION['id'] = mysqli_insert_id($con);
$_SESSION['email'] = $email;
header('location: products.php'); 
}
?>