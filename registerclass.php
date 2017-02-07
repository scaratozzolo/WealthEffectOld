<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register A Class - The Wealth Effect</title>
<link rel="icon" href="pictures/twe_icon.jpeg" />

<link href="bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet" />
<link href="bootstrap-3.2.0-dist/css/bootstrap-theme.css" rel="stylesheet" />
<link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="/test/style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type='text/javascript' src="bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>



</head>

<body>

<?php
if(isset($_POST['login']))
{
$classid = rand(1,9999);

echo "<h1>$classid</h1>";
}
?>


<form method="post">

<input type="text" name="test" placeholder="test">

<input class="btn btn-success" type="submit" name="login" value="Start the Test" />


</form>

</body>
</html>