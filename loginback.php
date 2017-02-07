<?php
header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');


if(isset($_POST['login'])) 
{
	
$uname = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['pass']);


// Create connection
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");


$username= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '$uname' AND password= '$pass') OR (email= '$uname' AND password= '$pass')");

$numrows = mysqli_num_rows($username);
$row = mysqli_fetch_array($username);


if ($username) {
	if ($numrows > 0) {
		setcookie("wealth_user", $uname, time() + (86400 * 1), "/");
		setcookie("wealth_password", $pass, time() + (86400 * 1), "/");
		header( 'Location: dashboard.php' ) ;		
	} else {
		header( 'Location: login.php' ) ;
	 		
}
}		


}




?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In</title>
</head>

<body>
</body>
</html>