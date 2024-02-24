<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Index.css">

<title>Account Sign-in</title>
<?php include 'Index_Header.css';?>
</head>

<body>

<form action="Login_Handler.php" method="post">
<p><a style="color:orange"><b>Sign-in to Your Account</b></a></p>
User Name:<input type="text" name="un" value="" required><br>
Password:&nbsp;&nbsp;&nbsp;<input type="password" name="pw" value="" required><br>

<input type="submit" value="Submit"><br>

<p>Don't have an account? <a href="New_Account_Collector.php" style="color:orange">Create one!</a></p>

</form>

</body>
<?php include 'Index_Footer.css';?>
</html>