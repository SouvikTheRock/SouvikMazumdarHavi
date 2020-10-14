<?php
include("connect.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['uname'];
    $password=$_POST['pswd'];
    $sql="SELECT Email,Password FROM user_details";
    $res=mysqli_query($con,$sql)
    or
    die("Query Execution Error");
    echo "Data received";
    while ($row = mysqli_fetch_array($res)){
        if($row['Email']==$username && $row['Password']==$password){
            echo '<script>alert("Logged In");window.location.href="dashboard.html";</script>';
        }
        else{
            echo '<script> alert("No");window.location.href="signin.html";</script>';
        }   
}  
}
?>