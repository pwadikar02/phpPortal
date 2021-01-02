<html>
<title>
</title>
<head>
<link rel="stylesheet" href="../Resources/css/.css">
<link rel="stylesheet" href="../Resources/bootstrap/dist/css/bootstrap.css">
<script src="../Resources/js/script.js">
</script>
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
    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
    </ul>
  </div>
   </nav>
</header>
<div class="container">

<div class="row">
  <div class="col-sm-3 form-group">

  </div>
  <div class="col-sm-6 form-group">

 

<div class="panel panel-default">
<div class="panel-heading text-center"><b><span class="glyphicon glyphicon-log-in"></span> Login</b></div>
  <div class="panel-body">

<form action="test/insert.php" method="POST">

<div class="panel panel-default">
<div class="panel-heading">Enter your </div>
  <div class="panel-body">

<div class="row">
<div class="col-sm-12 form-group" style="background-color:;">
<label for="username"><b>  Username:</b></label>
<input type="text" name="Username" placeholder="Enter your username" class="form-control"> 
</div>
</div>

<div class="row">
<div class="col-sm-12 form-group">
<label for="password"><b>  Password:</b></label>

<input type="password" name="password" placeholder="password" id="myPassword"  class="form-control"><br />

<input type="checkbox" onclick="showPass()"> Show Password

<input type="checkbox"> Remember Me
</div>
</div>

  </div>
</div>
</form>
  </div>
<div class="panel-footer"><input input type="submit" value="Login" class="btn btn-primary btn-block"></button>
</div>
</div>
</div>
  <div class="col-sm-3 form-group">

  </div>
</div>
</div>
</body>

</html>