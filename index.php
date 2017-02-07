
<?php 

//log in
if(isset($_POST['login'])) 
{
	
$uname = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['pass']);

setcookie("wealth_user", $uname, time() + (86400 * 30), "/");
setcookie("wealth_password", $pass, time() + (86400 * 30), "/");

// Create connection
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");


$username= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '$uname' AND password= '$pass') OR (email= '$uname' AND password= '$pass')");

$numrows = mysqli_num_rows($username);
$row = mysqli_fetch_array($username);


if (!mysqli_query($username)) {
	if ($numrows > 0) {
		die('<script type="text/javascript">window.location.href="../dashboard.php";</script>');
	} else {
		echo 'wrong something ';
	 		
}
}		

mysqli_close($con);

}


//SIGN UP
if(isset($_POST['signup']))
{
$teacher_tableid= substr(str_shuffle(md5(time())),0,8);
$fname = htmlspecialchars($_POST['first']);
$lname = htmlspecialchars($_POST['last']);
$uname = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['pass']);
$email = htmlspecialchars($_POST['email']);



// Create connection
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");


$table = mysqli_query($con, "CREATE TABLE teacher_" . $teacher_tableid . " (id INT(100) NOT NULL AUTO_INCREMENT, class_tableid varchar(255) NOT NULL, classname varchar(255) NOT NULL, classpass varchar(255) NOT NULL, PRIMARY KEY (id), UNIQUE (classpass))");

$sql= mysqli_query($con, "INSERT INTO teachers (teacher_tableid, firstname, lastname, username, password, email) VALUES ('$teacher_tableid', '$fname', '$lname', '$uname', '$password', '$email')");


if (!mysqli_query($con,$sql)) { 		
		die('<script type="text/javascript">window.location.href="../index.php";</script>');
	} else {
		echo "didnt work";
}


mysqli_close($con);
	
}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta <meta name="description" content="The Wealth Effect - A Tool for teachers to teach students about managing their money for later in life, and what it would be like if they were living on a income, it's a live simulation of a student just getting out of High School">
<meta="Content-Type" content="text/html; charset=utf-8" />
<title>The Wealth Effect</title>
<link rel="icon" href="pictures/twe_icon.jpeg" />

<link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.sublimevideo.net/js/kcl95r21.js"></script>
<script type='text/javascript' src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
<script type='text/javascript' src='/js/test.js'></script>


<style>
@font-face {
	font-family: LoversQuarrel-Regular;
   src: url(/fonts/hnul8.tff);
}

.navul {
	display: inline;
    font-family: hnul;
	
}
.jumbotron {
	padding-top:150px;
	color:#000000;
    font-family:LoversQuarrel-Regular;
    text-align: center;
    background-color: transparent;
    -webkit-font-smoothing: antialiased !important;
    text-shadow: 1px 1px 1px rgba(255,255,255,0.004);
    text-rendering: optimizeLegibility !important;
    font-size: 80px;
}
.btn-default {
    text-align: center;
    letter-spacing: 2px;
    -webkit-font-smoothing: antialiased;
}
.btn {
    text-align: center;
    letter-spacing: 2px;
    -webkit-font-smoothing: antialiased;
    text-shadow: 1px 1px 1px rgba(255,255,255,.004);
}
h1 {
    text-decoration: underline;
    -moz-text-decoration-color: white;
    text-decoration-color: white;  
}
body {
	background-image:url(pictures/homebgbck.jpg);
	background-size:cover;
}
.form-control {
	border-radius:2 !important;
}
.intro {
	top: 0 0px;
}
.pg-canvas {
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.thumbnail {
	width:250px;
	height:250px;
}


</style>

<script type="text/javascript"> 



</script>

</head>

<body>



<div class="navbar navbar-fixed-top">
	<div class="container">
	<div class="container-fluid">

                <form method="post" action="loginback.php" class="navbar-form navbar-right" role="search"> 				
               		<div class="form-group">             
    					<input class="form-control" name="username" type="text" placeholder="Username or Email" autocomplete="off" required/>
                	</div>
                    <div class="form-group">
                		<input class="form-control" name="pass" type="password" placeholder="Password" autocomplete="off" required/>
                    </div>
                		<input class="btn btn-success" type="submit" name="login" value="Log In" />
                        <input class="btn btn-primary" type="button" name="signform" value="Sign Up"  data-toggle="modal" data-target="#signup" />
				</form>
                
    </div>
    </div>
</div>





<div class="container">
<div class="jumbotron">
	<h1 style="font-size: 90px;">The Wealth Effect</h1>
	<p style="font-size: 30px;">Teaching students about real life finances for after high school.</p>
    <p><a class="btn btn-warning btn-lg" data-toggle="modal" data-target="#learn" style="font-family: LoversQuarrel-Regular;">Learn More</a></p></font>
</div>
</div>

<!--<div class="container">
<div class="row">
  <div class="col-md-4 col-md-offset-2">
    <div class="thumbnail">
      <img src="pictures/playstore.jpeg" alt="playstore" width="100px" height="100px">
      <div class="caption">
        <h3>Download from the Play Store</h3>
        <p style="text-align:center"><a href="#" class="btn btn-primary" role="button">Download</a></p>
      </div>
    </div>
  </div>
  
  <div class="col-md-4 col-md-offset-1">
    <div class="thumbnail">
      <img src="pictures/appstore.png" alt="appstore" width="100px" height="100px">
      <div class="caption">
        <h3>Download from the App Store</h3>
        <p style="text-align:center"><a href="#" class="btn btn-primary" role="button">Download</a></p>
      </div>
    </div>
  </div> !--> 
  
  
   
</div>
</div>










<div class="modal fade" id="learn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Learn More About The Wealth Effect</h4>
      </div>
      <div class="modal-body">
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Wealth Effect is a program that is used to teach students about living in the real world after high school. It was created by the Financial Literacy teacher at Sussex County Technical School, William Anderson.
</p><br />

 		<p style="text-align:center"><a href="#0" class="sublime">
  Watch a video about The Wealth Effect (Slower)</a> or <a href="https://www.youtube.com/watch?v=EEsZ8tJ-okI" target="_blank">Watch it on YouTube</a></p><br />


		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are the IT shop at our school. Everyone who had any part in the making of this program has also done it as a student with Mr. Anderson. Some students had this to say about the program: <br /><br />

<b>"Unlike most classes, it taught us to deal with money at a young age."</b> - Jake H.<br /><br />

<b>"This class taught us how to be adult with our money and to know when to spend and when to wait on something."</b> - Nate G.<br /><br />

<b>"This class taught us to work well as a group and how to manage our money properly and efficiently."</b> - Julian P. <br /><br />

<b>"The class taught us how to deal with fines and lack of money before we actually have to face them."</b> - Daniel M.<br /><br />

<b>"This was the best class I have had in all my school years. The things I learned here I will never forget."</b> - Scott C.<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Wealth Effect has had a tremendous impact on many students and now we're here to simplify it and bring it into the classrooms of schools everywhere! This program will teach students about <b>writing checks, paying bills, keeping a checkbook register, credit cards, investing in the stock market</b>, and other real life scenarios people need to know how to do. To make this more real, each student's weekly income is based upon their grade in the class. The better the student does, the more money they make. Simple! </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signup" data-dismiss="modal">Sign Up</button>
      </div>
    </div>
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
<!--seperate teacher and student signups !-->

</div>





<video id="0" width="640" height="360" style="display:none" data-uid="0" preload="none">
  <source src="http://www.thewealtheffect.org/video/wealth.mp4" data-quality="hd" />
  <source src="http://www.thewealtheffect.org/video/wealth.mp4" />
  <source src="http://www.thewealtheffect.org/video/wealth.mp4" />
</video> 
</body>
</html>