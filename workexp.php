<?php
include ("connect.php");
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $workexp=$_POST["work"];
    $ins = "INSERT INTO department(response) VALUES ('$workexp')";
    $result = mysqli_query($con,$ins) or
die("Error querying the database");
header('location:dashboard.html');
$qry="SELECT * from department";
$result=mysqli_query($con,$qry) or
die("Error!");
echo "<table border='1' padding='10px'>
<tr>
<th>Name</th>
<th>Department</th>
</tr>";
while($row=mysqli_fetch_assoc($result))

  {
    echo "<tr>";
    echo "<td>" . $row['response'] . "</td>";
    echo "</tr>";
  }
}
?>