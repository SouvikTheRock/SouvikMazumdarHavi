<?php
include ("connect.php");
$qry="SELECT * from user_details";
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

  echo "<td>" . $row['Name'] . "</td>";

  echo "<td>" . $row['Department'] . "</td>";
  echo "</tr>";

  }
  echo "</table>"
?>