<?php
header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');

$classid = $_GET[urldecode('classid')];


$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");


$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");
$row = mysqli_fetch_array($query);

$teachertable= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = " . $classid . "");
$classtable= mysqli_fetch_array($teachertable);






?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manage <?php echo $classtable['classname'] ?> - The Wealth Effect</title>
<link rel="icon" href="pictures/twe_icon.jpeg" />

<link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/test/style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

<style>


</style>
</head>

<body>




<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
  			<a class="navbar-brand" href="dashboard.php"><font color="white"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Dashboard</font></a>
    	</div>
    	<div class="nav navbar-right">
    		<ul class="nav navbar-nav">
    			<li><a style="cursor:pointer" data-toggle="modal" data-target="#registerclass"><font color="white">Calendar</font></a></li>       
    			<li><a href="#"><font color="white">Wheel of Misfortune</font></a></li>
        	</ul>
        </div>
    </div>
</div>




<h1 style="text-align:center; font-size:75; padding-top:150px;">WORK IN PROGRESS</h1>
<h1 style="text-align:center; font-size:65; padding-top:150px;">STUDENT INFORMATION COMING SOON</h1>


</body>
</html>