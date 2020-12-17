<?php
//function OpenCon()
 
 $dbhost = "localhost:3308"; 
 $dbuser = "root";
 $dbpass = "";
 $db = "college";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


    if(!$conn){
          echo "connect Error:".mysqli_connect_error();
    }else{


    
    $first_name=$_POST['first_name'];

    $middle_name=$_POST['middle_name'];

    $last_name= $_POST['last_name'];
    //$updated_by=$_POST['first_name'];
    //$country=$_POST['country'];
  // if (isset($first_name)) {
    //   echo ".$first_name";
    //}
   $sql="INSERT INTO student(first_name,middle_name,last_name,created_by,updated_by)VALUES('$first_name','$middle_name','$last_name','none','none')";

    if (mysqli_query($conn,$sql)) {
         echo "<h1>One Recode Added Successfully!</h1>";
     }
     else{
        echo "Error";

        mysqli_close($conn);
     }
 }

?>