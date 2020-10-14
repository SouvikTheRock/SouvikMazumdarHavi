<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]==="POST")
{
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$department=$_POST["dept"];
$dob=$_POST["dob"];
$passowrd=$_POST["pswd"];
$ins = "INSERT INTO user_details(Name,Email,Phone,Department,DOB,Password) VALUES ('$name','$email','$phone','$department','$dob','$passowrd')";
$result = mysqli_query($con,$ins) or
die("Error querying the database");
echo "<script> alert('Sign Up Succesfull'); window.location.href = 'signupsucc.html';</script>;";
}
?>