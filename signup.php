<?php

$teacher = $_GET[urldecode('teacher')];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Sign Up - The Wealth Effect</title>

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
	top:190px;
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



<h2><font color="#FFFFFF">Student Sign Up</font></h2>
<br />



<form method="post" action="signupback.php?teacher=<?php echo $teacher ?>">

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
  		<span class="input-group-addon">Email*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<input name="email" type="email" class="form-control"/>
        </div>
        
        <br />

		<div class="input-group">
  		<span class="input-group-addon">Class ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
		<input name="classid" type="text" required="required" class="form-control"/>
        </div>

        <br />

        <p>*Email is <b>optional</b></p>

<br /> 



<input class="btn btn-success" type="submit" name="studentsignup" value="Sign Up" />



</form>

</div>

</div>













</body>

</html>