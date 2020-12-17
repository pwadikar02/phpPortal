<html>
<title>
</title>
<head>
<link rel="stylesheet" href="../Resources/css/1style.css">
    <script src="../Resources/js/script.js">
</script>
</head>
<header class="hdr0">
<h3>College Portal</h3>
<hr>
<input type="button" onclick="window.location.href='register.php'" value="Register" class="right"><br>

</header>
<form action="test/insert.php" method="POST">

<table class="r2">
    <th>
<h2><b>Login</b></h2>
<hr>
<hr>

</th>
<hr>
<tr>
<td>
<label for="username"><b>  Username:</b></label>
<br>
<input type="text" name="Username" placeholder="Enter your username" required> 
</td>
</tr>
<br>
<tr>
    <td>
<label for="password"><b>  Password:</b></label>
<br>
<input type="password" name="password" placeholder="password" id="myPassword" required>
<br>
</td>
</tr>
<tr>
    <td>
<input type="checkbox" onclick="showPass()">Show Password
<br>
</td>
</tr>
<tr>
    <td>
<input type="submit" value="Login">
</td>
</tr>
<br>
</form>

</html>