<?php
session_start();
// define variables and set to empty values
$first_nameErr = $middle_nameErr = $last_nameErr = $mobileErr = $emailErr = $date_of_birthErr = $designationErr = $genderErr = $date_of_joinErr = $c_addrErr = $p_addrErr = $user_nameErr = $passErr = $c_passErr ="" ;

$first_name = $middle_name = $last_name = $mobile = $email = $date_of_birth = $designation = $gender = $date_of_join = $c_addr = $p_addr = $user_name = $pass = $c_pass= "" ;

$post_data=array();
$post_error=array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $post_data['first_name']=$_POST["first_name"];
  $post_data['middle_name']=$_POST["middle_name"];
  $post_data['last_name']=$_POST["last_name"];
  $post_data['mobile']=$_POST["mobile"];
  $post_data['email']=$_POST["email"];
  $post_data['date_of_birth']=$_POST["date_of_birth"];
  $post_data['designation']=$_POST["designation"];
  $post_data['gender']=$_POST["gender"];
  $post_data['date_of_join']=$_POST["date_of_join"];
  $post_data['c_addr']=$_POST["c_addr"];
  $post_data['p_addr']=$_POST["p_addr"];
  $post_data['user_name']=$_POST["user_name"];
  $post_data['pass']=$_POST["pass"];
  $post_data['c_pass']=$_POST["c_pass"];



   if(empty($_POST["first_name"])) {
    $post_error['first_nameErr']="First Name is required";
    $first_nameErr = "First Name is required";
  } else {
    $post_error['first_nameErr'] ="";
    $first_name = test_input($_POST["first_name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["first_name"])) {
      $post_error['first_nameErr']="Only letters and white space allowed";
        $first_nameErr = "Only letters and white space allowed";
      }

  }
  
  if(empty($_POST["middle_name"])) {
    $post_error['middle_nameErr']="Middle First is required";
    $middle_nameErr = "Middle First is required";
  } else {
    $post_error['middle_nameErr']="";
    $middle_name = test_input($_POST["middle_name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$middle_name)) {
      $post_error['middle_nameErr']="Only letters and white space allowed";
        $middle_nameErr = "Only letters and white space allowed";
      }
  }

  if(empty($_POST["last_name"])) {
    $post_error['last_nameErr']="Last Name is required";
    $last_nameErr = "Last Name is required";
  } else {
    $post_error['last_nameErr']="";
    $last_name = test_input($_POST["last_name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$last_name)) {
      $post_error['last_nameErr']="Only letters and white space allowed";
        $last_nameErr = "Only letters and white space allowed";
      }
      }

  if(empty($_POST["mobile"])) {
    $post_error['mobileErr']="Mobile no. is required";
    $mobileErr = "Mobile no. is required";
  } else {
    $post_error['mobileErr'] ="";

    $mobile = test_input($_POST["mobile"]);
    if (!preg_match("/^[0-9]*$/",$mobile)) {
      $post_error['mobileErr']="Only Numbers are allowed";
        $mobileErr = "Only Numbers allowed";
      }
  }

  if(empty($_POST["email"])) {
    $post_error['emailErr']="Email is required";
    $emailErr = "Email is required";
  } else {
    $post_error['emailErr'] ="";
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $post_error['emailErr']="Invalid email format";
        $emailErr = "Invalid email format";

    }
  }

  if(empty($_POST["date_of_birth"])) {
    $post_error['date_of_birthErr']="Date of Birth is required";
    $date_of_birthErr = "Date of Birth is required";
  } else {
    $post_error['date_of_birthErr']="";
    $date_of_birth = test_input($_POST["date_of_birth"]);

    $dob=$_POST["date_of_birth"];
    $diff = (date('Y') - date('Y',strtotime($dob)));
    if($diff<18){
      $post_error['date_of_birthErr']="user is at least 18 years old";
    }
  }

  if(empty($_POST["designation"])) {
    $post_error['designationErr']="Designation is required";
    $designationErr = "Designation is required";
  } else {
    $post_error['designationErr']="";
    $designation = test_input($_POST["designation"]);
  }

  if(empty($_POST["gender"])) {
    $post_error['genderErr']="gender is required";
    $genderErr = "gender is required";
  } else {
    $post_error['genderErr']="";
    $gender = test_input($_POST["gender"]);
  }

  if(empty($_POST["date_of_join"])) {
    $post_error['date_of_joinErr']="Date of joining is required";
    $date_of_joinErr = "Date of joining is required";
  } else {
    $post_error['date_of_joinErr']="";
    $date_of_join = test_input($_POST["date_of_join"]);

    $c_start='2017-01-01';
    $c_date = (date('Y') - date('Y',strtotime($c_start)));

    $doj=$_POST["date_of_join"];
    $diff = (date('Y') - date('Y',strtotime($doj)));
    if($c_date<=$diff){
      $post_error['date_of_joinErr']="Invalid Date of joining";
    }

  }

  if(empty($_POST["c_addr"])) {
    $post_error['c_addrErr']="Current Address is required";
    //$c_addrErr = "Current Address is required";
  } else {
    $post_error['c_addrErr']="";
   // $c_addr = test_input($_POST["c_addr"]);
  } 
  if(empty($_POST["p_addr"])) {
    $post_error['p_addrErr']="Permanent Address is required";
   // $p_addrErr = "Permanent Address is required";
  } else {
    $post_error['p_addrErr']="";
    //$p_addr = test_input($_POST["p_addr"]);

  }

  if(empty($_POST["user_name"])) {
    $post_error['user_nameErr']= "Username is required";

    $user_nameErr = "Username is required";
  } else {
    $post_error['user_nameErr']="";
    $user_name = test_input($_POST["user_name"]);
  }

  if(empty($_POST["pass"])) {
    $post_error['passErr']= "Password is required";
    $passErr = "Password is required";
  } else {
    $post_error['passErr']="";
    $pass = test_input($_POST["pass"]);
    if(!preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/",$pass)) {
      $post_error['passErr']="Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";

    $passErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
    }
  }           
  if(empty($_POST["c_pass"])) {
    $post_error['c_passErr']=" please Confirm the Password";
    $c_passErr = " please Confirm the Password";
  } else {
    $post_error['c_passErr']="";
    $c_pass = test_input($_POST["c_pass"]);
    if($pass !== $c_pass){
      $post_error['c_passErr']= "Password doesn't match";
        $c_passErr = "Password doesn't match";
    }
  }
}
$_SESSION["post_data"] = $post_data;
$_SESSION["post_error"] = $post_error;
//header('Location:register.php');
print_r($_SESSION["post_data"] = $post_data);
function test_input($data) {
    $data = trim($data);
       $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
  }


/*$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$date_of_birth=$_POST['date_of_birth'];
$designation=$_POST['designation'];
$gender=$_POST['gender'];
$date_of_join=$_POST['date_of_join'];

$c_add=$_POST['c_add'];
$p_add=$_POST['p_add'];

$user_name=$_POST['user_name'];
$pass=$_POST['pass'];
$confirm_password=$_POST['confirm_password'];
 

echo $first_name;
echo $middle_name;
echo $last_name;*/



?>