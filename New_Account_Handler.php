<?php
session_start();
?>
<html>
<head>
<?php include 'Secret_Header.css';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Index.css">

<title>Account Creation Successful</title>

</head>

<body>
<?php
$fname = $_POST['fn'];
$lname = $_POST['ln'];
$user = $_POST['un'];
$pswd = $_POST['pw'];

echo "<br>Thank you for joining, " . $fname . "! We're glad you're here." . "<br>" . "We know that, regardless of how you would describe yourself, you'll enjoy exploring our site!" . "<br>" . "Happy Haunting!" ;
?>
<p>Click <a href="Secret_Home_Page.php" style="color:orange">here</a> to return to home page</p>

</body>
<?php include 'Index_Footer.css';?>
</html>