<html>
<title>
</title>
<head>
<link rel="stylesheet" href="../Resources/css/1style.css">


</head>
<header class="hdr0">
<h3>College Portal</h3>
<hr>
<input type="button" onclick="window.location.href='login.php'" value="Login" class="right"><br>

</header>
<body>


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

<div class="container0">
<div class="container1">
<form>
<label for="first_name"><b> First Name:</b></label>
<input type="text" name="first_name" placeholder="First Name" required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >

<label for="middle_name"><b> Middle Name:</b></label>
<input type="text" name="middle_name" placeholder="Middle Name"required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >

    <label for="last_name"><b> Last Name:</b></label>
    <input type="text" name="last_name" placeholder="Last Name"required onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" >

    
    <label for="number"><b> Mobile No.:</b></label>    
    <input type="tel" name="Mobile" placeholder="Mobile No."  required>


       <label for="email"><b> Email:</b></label>
    <input type="email" name="email" placeholder="Email" required>
    
    <label for="dob"><b> Date of Birth:</b></label>
    <input type="date" name="date of birth" require> 
    
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

</select>

<label for="gender"><b> Gender:</b></label>
<input type="radio" id="male" name="gender" value="male" require>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
  
  <label for="username"><b>  Username:</b></label>
    <input type="text" name="user_name" placeholder="Username" require>


  <label for="pass"><b> Password:</b></label>
    <input type="password" name="pass" placeholder="Password" id="0_myPassword" required>

  <label for="confarm_password"><b> Confarm Password:</b></label>
  <input type="password" name="confarm_password" placeholder="Confarm Password" id="c_myPassword" required>
<input type="submit" value="Register">


</form>
</div>
</div>
</body>
</html>