<?php 
header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');

 
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");


 
$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");
$numrows = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

if ($query) { 	
	if ($numrows == 0) {	
		header('Location: login.php');
	}
}




if(isset($_POST['registerclass'])) {
$classname = htmlspecialchars($_POST['class']);
$classpass = substr(str_shuffle(md5(time())),0,10);
$class_tableid= substr(str_shuffle(md5(time())),0,8);


$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");

$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");

$row = mysqli_fetch_array($query);




$teacherclasses= mysqli_query($con, 'INSERT INTO teacher_' . $row["teacher_tableid"] . ' (id, class_tableid, classname, classpass) VALUES (NULL, "' . $class_tableid . '", "' . $classname . '", "' . $classpass . '")');

$classestable = mysqli_query($con, "CREATE TABLE class_" . $class_tableid . " (classid INT(100) NOT NULL AUTO_INCREMENT, studentid varchar(255) NOT NULL, studentname varchar(255) NOT NULL, money varchar(255) NOT NULL, PRIMARY KEY (classid))");


}



function displayid($classid) {
clearstatcache();
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");

$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");

$row = mysqli_fetch_array($query);
	
	
	
	
$class= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = '$classid' ");
$classrow = mysqli_fetch_array($class);
$numrows = mysqli_num_rows($class);

if ($class) { 
	if ($numrows > 0 ) {
		echo "<td>" . $classid . ".</td>";		
	} else {
		echo '<td><font color="#FF0000">&nbsp;</font></td>';
}	
}	
}



function displayclass($classid) {
clearstatcache();
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");

$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");

$row = mysqli_fetch_array($query);
	
	
	
	
$class= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = '$classid' ");
$classrow = mysqli_fetch_array($class);
$numrows = mysqli_num_rows($class);

if ($class) { 
	if ($numrows > 0 ) {
		echo "<td>" . $classrow['classname'] . "</td>";		
	} else {
		echo '<td><font color="#FF0000">&nbsp;</font></td>';
}	
}
}




function displaypass($classid) {
clearstatcache();
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");

$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");

$row = mysqli_fetch_array($query);
	
	
	
	
$class= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = '$classid' ");
$classrow = mysqli_fetch_array($class);
$numrows = mysqli_num_rows($class);

if ($class) { 
	if ($numrows > 0 ) {
		echo "<td>" . $classrow['classpass'] . "</td>";		
	} else {
		echo '<td><font color="#FF0000">&nbsp;</font></td>';
}	
}	
}



function manageclass($classid) {
clearstatcache();
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");

$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");

$row = mysqli_fetch_array($query);
	
	
	
	
$class= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = '$classid' ");
$classrow = mysqli_fetch_array($class);
$numrows = mysqli_num_rows($class);


if ($class) { 
	if ($numrows > 0 ) {
		echo '<td><a href="class.php?classid=' . urlencode($classid) . '"><font color="666666"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></td>';		
	} else {
		echo '<td><font color="#FF0000">&nbsp;</font></td>';
}	
}	
}


function deleteclass($classid) {
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");

$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");

$row = mysqli_fetch_array($query);
	
	
	
	
$class= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = '$classid' ");
$classrow = mysqli_fetch_array($class);
$numrows = mysqli_num_rows($class);


if ($class) { 
	if ($numrows > 0 ) {
		echo '<td><a href="delete.php?delete=' . $classid . '"><font color="FF0073"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></font></a></td>';	
	} else {
		echo '<td><font color="#FF0000">&nbsp;</font></td>';
}	
}		
}






?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard - The Wealth Effect</title>
<link rel="icon" href="pictures/twe_icon.jpeg" />

<link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/test/style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>

<style>
body {
  left: 0;
  margin: 0;
  overflow: hidden;
  position: relative;
}

.classtable{
	padding-top:100px;	
}

th {
	text-align:center;	
}

td {
	text-align:center;
}

</style>

</head>



<body>


<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
  			<?php echo '<a class="navbar-brand" ><font color="white">Hello, ' . $row["firstname"] . ' ' . $row["lastname"] . '</a></font>' ?>
    	</div>
    	<div class="nav navbar-right">
    		<ul class="nav navbar-nav">
    			<li><a style="cursor:pointer" data-toggle="modal" data-target="#registerclass"><font color="white">Register A Class</font></a></li>       
    			<li><a href="logout.php"><font color="white">Log Out</font></a></li>
                <li><a href="help.php"><font color="white">Help</font></a></li>
        	</ul>
        </div>
    </div>
</div>



<div class="container">
<div class="classtable">

<table class="table table-striped">
	<tr>
        <th>#</th>	
        <th>Class</th>
		<th>Password</th>
        <th>Manage Class</th>
        <th>Delete Class</th>
    </tr>
    <tr>
    	<?php displayid(1); ?>
       	<?php displayclass(1); ?>
        <?php displaypass(1); ?>
        <?php manageclass(1); ?>
        <?php deleteclass(1); ?>
    </tr>   
   <tr>
    	<?php displayid(2); ?>
       	<?php displayclass(2); ?>
        <?php displaypass(2); ?>
        <?php manageclass(2); ?>
        <?php deleteclass(2); ?>
	</tr>
    <tr>
    	<?php displayid(3); ?>
       	<?php displayclass(3); ?>
        <?php displaypass(3); ?>
        <?php manageclass(3); ?>
        <?php deleteclass(3); ?>
	</tr>
    <tr>
    	<?php displayid(4); ?>
       	<?php displayclass(4); ?>
        <?php displaypass(4); ?>
        <?php manageclass(4); ?>
        <?php deleteclass(4); ?>
	</tr>
    <tr>
    	<?php displayid(5); ?>
       	<?php displayclass(5); ?>
        <?php displaypass(5); ?>
        <?php manageclass(5); ?>
        <?php deleteclass(5); ?>
	</tr>
    <tr>
    	<?php displayid(6); ?>
       	<?php displayclass(6); ?>
        <?php displaypass(6); ?>
        <?php manageclass(6); ?>
        <?php deleteclass(6); ?>
	</tr>
    <tr>
    	<?php displayid(7); ?>
       	<?php displayclass(7); ?>
        <?php displaypass(7); ?>
        <?php manageclass(7); ?>
        <?php deleteclass(7); ?>
	</tr>
    <tr>
    	<?php displayid(8); ?>
       	<?php displayclass(8); ?>
        <?php displaypass(8); ?>
        <?php manageclass(8); ?>
        <?php deleteclass(8); ?>
	</tr>
    <tr>
    	<?php displayid(9); ?>
       	<?php displayclass(9); ?>
        <?php displaypass(9); ?>
        <?php manageclass(9); ?>
        <?php deleteclass(9); ?>
	</tr>
    <tr>
    	<?php displayid(10); ?>
       	<?php displayclass(10); ?>
        <?php displaypass(10); ?>
        <?php manageclass(10); ?>
        <?php deleteclass(10); ?>
	</tr>


</table>


</div>
</div>

<div class="modal fade" id="registerclass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="text-align:center">Register a Class</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<div class="input-group">
  		<span class="input-group-addon">Class Name:</span>
		<input name="class" type="text" required="required" class="form-control" autocomplete="off" />
		</div>
        
		<br />
        
      <div class="modal-footer">
        <input type="submit" name="registerclass" value="Register Class" class="btn btn-success"/>
		</form>
      </div>
    </div>
  </div>
</div>





</body>
</html>