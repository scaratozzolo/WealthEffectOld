<?php

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
		header( 'Location: loginpage.php' ) ;
	} else {
		echo "didnt work";
}


mysqli_close($con);
	
}




if(isset($_POST['studentsignup'])) {
	
$teacher = $_GET[urldecode('teacher')];
$student_tableid= substr(str_shuffle(md5(time())),0,8);
$fname = htmlspecialchars($_POST['first']);
$lname = htmlspecialchars($_POST['last']);
$uname = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['pass']);
$email = htmlspecialchars($_POST['email']);
$classid = htmlspecialchars($_POST['classid']);



$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");



$sql= mysqli_query($con, "INSERT INTO students (student_tableid, firstname, lastname, username, password, email) VALUES ('$student_tableid', '$fname', '$lname', '$uname', '$password', '$email')");


$teacher= mysqli_query($con,"SELECT * FROM teachers WHERE teacher_tableid = $teacher");
$row = mysqli_fetch_array($teacher);





}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>