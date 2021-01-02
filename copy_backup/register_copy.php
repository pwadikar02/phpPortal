<html>
<title>
</title>
<head>
<link rel="stylesheet" href="../Resources/css/.css">
<link rel="stylesheet" href="../Resources/bootstrap/dist/css/bootstrap.css">
</head>
<body>

<header>
<!--<a href="#" class="navbar-left img-resposive "><img src="Resources/img_logo/bookLogo.jpg" width="120" height="60"></a><br>-->

   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="../index.php" class="navbar-brand">Emp Portal</a>
    </div>
    <!--<ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>-->
    <ul class="nav navbar-nav navbar-right">
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</header>

<!--<table class="r1">
<form action="../Resources/dbconnections/insert.php" method="POST" > 

  <th><h1><b>Register</b>
</h1>
<tr>
  <td colspan="2"><hr><hr>
</td>
</tr>
</th>
<hr>

    <tr>
        <td>
        <label for="first_name"><b> First Name:</b></label>

        <input type="text" name="first_name" placeholder="First Name" required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></td>

<td>
<label for="middle_name"><b> Middle Name:</b></label>
    <input type="text" name="middle_name" placeholder="Middle Name"required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" ></td>
</tr>
<tr>
    <td>
    <label for="last_name"><b> Last Name:</b></label>
    <input type="text" name="last_name" placeholder="Last Name"required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
</td>
    <td>
    <label for="number"><b> Mobile No.:</b></label>    
    <input type="tel" name="Mobile" placeholder="Mobile No."  required>
</td>
</tr>
<tr>
    <td>
       <label for="email"><b> Email:</b></label>
    <input type="email" name="email" placeholder="Email" required></td>
    <td> 
    <label for="dob"><b> Date of Birth:</b></label><br>
    <input type="date" name="date of birth" require> </td>
    
</tr>
<tr>
  <td>
<label for="class"><b> Select Class:</b></label>
<select id="class" name="class" require>
<option value="1st">1st</option>
<option value="2nd">2nd</option>
<option value="3rd">3rd</option>
<option value="4th">4th</option>
<option value="5th">5th</option>
<option value="6th">6th</option>
<option value="7th">7th</option>
<option value="8th">8th</option>
<option value="9th">9th</option>
<option value="10th">10th</option>

</select></td>
  <td>
<label for="gender"><b> Gender:</b></label><br>
<input type="radio" id="male" name="gender" value="male" require>
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
  </td> 
</tr>
<tr>
  <td colspan="2">
  <label for="username"><b>  Username:</b></label><br>
    <input type="text" name="user_name" placeholder="Username" require>
  </td>
</tr>
<tr>
  <td>
  <label for="pass"><b> Password:</b></label>
    <input type="password" name="pass" placeholder="Password" id="0_myPassword" required>
</td>
  <td>
  <label for="confarm_password"><b> Confarm Password:</b></label>
  <input type="password" name="confarm_password" placeholder="Confarm Password" id="c_myPassword" required>
</td>
</tr>
<tr>
  <td colspan="2"><input type="submit" value="Register"></td>

</tr>
</form>

</table>-->

<?php


//$name = $_GET['Fname'];
//echo $name." is a handsom boy";
?>

<div class="container">
<div class="panel panel-default">
<div class="panel-heading text-center"><b><span class="glyphicon glyphicon-user"></span> Sign Up</b></div>
  <div class="panel-body">

<form action="show.php" method="POST">

<div class="panel panel-default">
<div class="panel-heading">Personal Detailes</div>
  <div class="panel-body">

<div class="row">
    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="first_name"><b> First Name:</b></label>

<input type="text" name="first_name" placeholder="First Name" class="form-control" required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
    </div>
    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="middle_name"><b> Middle Name:</b></label>
<input type="text" name="middle_name" placeholder="Middle Name" class="form-control" required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
    </div>
     <div class="col-sm-4 form-group" style="background-color:;">
     <label for="last_name"><b> Last Name:</b></label>
    <input type="text" name="last_name" placeholder="Last Name" class="form-control" required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="number"><b> Mobile No.:</b></label>    
    <input type="tel" name="mobile" class="form-control"  placeholder="Mobile No."  required>
    </div>
    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="email"><b> Email:</b></label>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
    </div>
     <div class="col-sm-4 form-group" style="background-color:;">
     <label for="dob"><b> Date of Birth:</b></label>
    <input type="date" name="date_of_birth" class="form-control" required> 
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="designation"><b> Designation:</b></label>
    <input type="text" name="designation" class="form-control" placeholder="Designation" required>
    </div>
    <div class="col-sm-4" style="background-color:;">
    <label for="gender"><b> Gender:</b></label>
    <div class="radio">
      <label><input type="radio" name="gender" value="m" required>Male</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="f" required>Female</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="gender" value="o" required>Other</label>
    </div>

    </div>

    <div class="col-sm-4 form-group" style="background-color:;">
     <label for="dob"><b> Date of Joining:</b></label>
    <input type="date" name="date_of_join" class="form-control" required> 
    </div>
  </div>

  </div>
</div>

<div class="panel panel-default">
<div class="panel-heading">Addresses</div>
  <div class="panel-body">

  <div class="row">
  <div class="col-sm-6 form-group" style="background-color:;">
     <label for="current_address"><b>  Current Address:</b></label>
      <textarea  name="c_add" class="form-control"  rows="3" required></textarea>
    </div>

    <div class="col-sm-6 form-group" style="background-color:;">
    <label for="permanent_address"><b> Permanent Address:</b></label>
    <textarea name="p_add" class="form-control"  rows="3" required></textarea>
    </div>
  </div>

  </div>
</div>

<div class="panel panel-default">
<div class="panel-heading">Setup credential</div>
  <div class="panel-body">

  <div class="row">
  <div class="col-sm-4 form-group" style="background-color:;">
     <label for="username"><b>  Username:</b></label>
    <input type="text" name="user_name" placeholder="Username" class="form-control" require>
    </div>

    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="pass"><b> Password:</b></label>
    <input type="password" name="pass" placeholder="Password" id="0_myPassword" class="form-control" required>
    </div>

    <div class="col-sm-4 form-group" style="background-color:;">
    <label for="confirm_password"><b> Confirm Password:</b></label>
  <input type="password" name="confirm_password" placeholder="Confirm Password" id="c_myPassword"  class="form-control" required>
    </div>

  </div>

  </div>
</div>
<input type="submit" class="btn btn-primary btn-block"> </button>

</form>
</div>
</div>
</div>
</body>
</html>