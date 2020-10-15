<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['uname'];
    $password=$_POST['pswd'];
    $sql="SELECT * FROM user_details where Email='$username'";
    $res=mysqli_query($con,$sql)
    or
    die("Query Execution Error");
    while ($row = mysqli_fetch_array($res)){
         if($row['Password']!=$password){
                      echo '<script> alert("Incorrect Password");window.location.href="signin.html";</script>';
        }
        else{

              echo '<script>alert("Logged In");window.location.href="dashboard.html";</script>';
        }   
}  
}
?>
