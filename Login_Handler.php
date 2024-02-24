<?php
session_start();
?>
<html>
<head>
<?php include 'Secret_Header.css';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Index.css">

<title>Login</title>

</head>

<body>
<?php

if (!isset($_POST['un']) || !isset($_POST['pw'])) {

	header('refresh:3; url=Login.php');
}
$user=$_POST['un'];
$pswd=$_POST['pw'];
$query= "SELECT user, pswd FROM login WHERE user = '$user' AND pswd = '$pswd'" ;

if ($user == 'jma' && $pswd == 'jma123') {
	$_SESSION['Login'] = $user;
	echo '<br>Welcome ' . $user . '!<br><br>' ;
	'User Name: ' . $user ;
	'Password: ' . $pswd;
	'Query: ' . $query;
	echo 'Return to Home Page<a href=Secret_Home_Page.php> Here </a>';
}

else {
	session_destroy();
	echo '<br>Return to Login Page<a href=Login.php> Here </a>';
}

include 'Spirit_connection.inc';

if (mysqli_connect_errno()) {
	echo 'Failed connection to MySQL: ' . mysqli_connect_error();
}

$result = mysqli_query($con, $query);

$row = mysqli_fetch_array($result);

if ($row == null) {
	echo '<br>Log in fails<br><br>';
}

else {
	echo '<br>Log in successful!<br><br>';
}

mysqli_close($con);
?>
</body>
<?php include 'Index_Footer.css';?>
</html>
