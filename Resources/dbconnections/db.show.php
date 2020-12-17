<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php

$dbhost = "localhost:3308"; 
 $dbuser = "root";
 $dbpass = "";
 $db = "college";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);  // $conn stores the boolean (True or fales) which is returned by mysqli function 

if(!$conn){
          echo "connect Error:".mysqli_connect_error();
}

$sql = "SELECT * FROM student;";
$result = mysqli_query($conn,$sql);
$resultcheck = mysqli_num_rows($result);
if ( $resultcheck > 0) {
    echo "<table>
    	<tr> 
    		<th>ID</th>
    		<th>First_name</th>
    		<th>middle_name</th>
    		<th>last_name</th>
    	</tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        	<td>" . $row["id"]. "</td>
        	<td>" . $row["first_name"]."</td>
        	<td>".$row["middle_name"]."</td>
        	<td>".$row["last_name"]."</td>

        </tr>";
    }
     "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>