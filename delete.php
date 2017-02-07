<?php

header('Expires: Thu, 19 Nov 1981 08:52:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
header('Pragma: no-cache');

$classid = $_GET[urldecode('delete')];


if(isset($_GET[urldecode('delete')])){
$con=mysqli_connect("localhost","thewealt_wealth","15TC871d","thewealt_wealtheffect");



$query= mysqli_query($con,"SELECT * FROM teachers WHERE (username= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "') OR (email= '" . $_COOKIE['wealth_user'] . "' AND password= '" . $_COOKIE['wealth_password'] . "')");
$row = mysqli_fetch_array($query);


$teachertable= mysqli_query($con,"SELECT * FROM teacher_" . $row["teacher_tableid"] . " WHERE id = " . $classid . "");
$classtableid= mysqli_fetch_array($teachertable);


$numrows = mysqli_num_rows($teachertable); //numrows - 1 = increment


$dropclasstable= mysqli_query($con,"DROP TABLE class_" . $classtableid["class_tableid"] . "");
$delteclass= mysqli_query($con,"DELETE FROM teacher_". $row["teacher_tableid"] . " WHERE id = " . $classid . "");






if ($teachertable) {
	if($classid = 1){
		$increment1 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='1' WHERE id='2' ");
		$increment2 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='2' WHERE id='3' ");
		$increment3 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='3' WHERE id='4' ");
		$increment4 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='4' WHERE id='5' ");
		$increment5 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='5' WHERE id='6' ");
		$increment6 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='6' WHERE id='7' ");
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 2){
		$increment2 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='2' WHERE id='3' ");
		$increment3 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='3' WHERE id='4' ");
		$increment4 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='4' WHERE id='5' ");
		$increment5 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='5' WHERE id='6' ");
		$increment6 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='6' WHERE id='7' ");
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 3){
		$increment3 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='3' WHERE id='4' ");
		$increment4 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='4' WHERE id='5' ");
		$increment5 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='5' WHERE id='6' ");
		$increment6 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='6' WHERE id='7' ");
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 4){
		$increment4 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='4' WHERE id='5' ");
		$increment5 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='5' WHERE id='6' ");
		$increment6 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='6' WHERE id='7' ");
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}	
	if($classid = 5){
		$increment5 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='5' WHERE id='6' ");
		$increment6 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='6' WHERE id='7' ");
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 6){
		$increment6 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='6' WHERE id='7' ");
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 7){
		$increment7 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='7' WHERE id='8' ");
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 8){
		$increment8 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='8' WHERE id='9' ");
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 9){
		$increment9 = mysqli_query($con,"UPDATE teacher_". $row["teacher_tableid"] . " SET id='9' WHERE id='10' ");
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		header( 'Location: dashboard.php' ) ;
	}
	if($classid = 10){
		$setincrement = mysqli_query($con,"ALTER TABLE teacher_". $row["teacher_tableid"] . " auto_increment =" . $numrows . "");
		//header( "refresh:2;url=dashboard.php" );
		header( 'Location: dashboard.php' ) ;
	}
	
	
}


}


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete <?php echo $classtableid["classname"] ?></title>

<link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/test/style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>





</head>

<body>











</body>
</html>