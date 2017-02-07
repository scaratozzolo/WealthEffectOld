<?php 

if(isset($_POST['submit'])) 

{

$uname = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['pass']);


// Create connection

$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");



// Check connection

//if (mysqli_connect_errno()) {

//  echo "Failed to connect to MySQL: " . mysqli_connect_error();

//} else {

//	echo "<h1>success</h1>";

//}



$username= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '$uname' AND password= '$pass') OR (email= '$uname' AND password= '$pass')");
$numrows = mysqli_num_rows($username);
$row = mysqli_fetch_array($username);



if (!mysqli_query($username)) {
	if ($numrows > 0) {
		header( 'Location: loginback.php' ) ;
	} else {
		header( 'Location: login.php' ) ;
}
}		


}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Login - The Wealth Effect</title>

<link rel="icon" href="pictures/twe_icon.jpeg" />



<link href="/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" />
<link href="/bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
<link href="main.css" rel rel="stylesheet" />



<style>

body {
  background-image:url(pictures/homebgbck.jpg);
  background-size: cover;
  background-repeat:repeat-y;
}



.form {
	text-align:center;
	background-color:#007aff;	
	width: 300px;
	box-shadow: 10px 10px 15px #333333;
	padding-top: 10px;
	padding-bottom:10px;
	padding-left:10px;
	padding-right:10px;
	position:relative;
	left: 40%;
	right: 50%;
	top:250px;
	border-radius:25px;
}



.form-control {
	border-radius:25 !important;
}





</style>

</head>



<body>



<!--<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
  			<a class="navbar-brand" href="index.html"><font color="white">The Wealth Effect</a></font>
    	</div>
    	<div class="nav navbar-right">
    		<ul class="nav navbar-nav">
    		<li><a href="index.php"><font color="white">Home</a></li></font>       
    		<li><a style="cursor:pointer" data-toggle="modal" data-target="#signup"><font color="white">Sign Up</a></li></font>
        </ul>
        </div>
    </div>
</div>!-->



<div class="form-group">
<div class="form">



<h2><font color="#FFFFFF">Please Log In</font></h2>
<p><a style="cursor:pointer;" data-toggle="modal" data-target="#signup"><font color="#FFFFFF">Or Signup</font></a></p>
<br />



<form method="post" action="loginback.php">

<input class="form-control" name="username" type="text" placeholder="Username or Email" required/>
<br />
<input class="form-control" name="pass" type="password" placeholder="Password" required/>

<br /> 



<input class="btn btn-success" type="submit" name="login" value="Log In" />



</form>

</div>

</div>








<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center">Teacher Sign Up</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="signupback.php">

		<div class="input-group">
  		<span class="input-group-addon">First Name:</span>
		<input name="first" type="text" required="required" class="form-control" style="text-transform:capitalize"/>
		</div>
        
		<br />
        
		<div class="input-group">
  		<span class="input-group-addon">Last Name:</span>
		<input name="last" type="text" required="required" class="form-control" style="text-transform:capitalize" />
		</div>
        
        <br />

		<div class="input-group">
  		<span class="input-group-addon">Username:&nbsp;</span>
		<input name="username" type="text" required="required" class="form-control" autocomplete="off"/>
		</div>

		<br />

		<div class="input-group">
  		<span class="input-group-addon">Password:&nbsp;&nbsp;</span>
		<input name="pass" type="password" required="required" class="form-control" autocomplete="off" />
		</div>
  
  		<br />

  		<div class="input-group">
  		<span class="input-group-addon">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<input name="email" type="email" required="required" class="form-control"/>
        </div>
        
      <div class="modal-footer">
        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary"/>
		</form>
      </div>
    </div>
  </div>
</div>







</body>

</html>