<html>
<head>
<?php include 'Index_Header.css';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Index.css">

<title>Create Your Account</title>

</head>

<body>

<p><a style="color:orange"><b>Create Your Account</b></a></p>
<form action="New_Account_Handler.php" method="post">
First Name:<input type="text" name="fn" value="" required><br><br>
Last Name:<input type="text" name="ln" value="" required><br><br>
User Name:<input type="text" name="un" value="" required><br><br>
Password:&nbsp;&nbsp;&nbsp;<input type="password" name="pw" value="" required><br><br><br>

How would you describe yourself: <br>
<input type="checkbox" name="interest[]" value="learn">Casual decorator<br>
<input type="checkbox" name="interest[]" value="repair">Animatronic Repair-Person<br>
<input type="checkbox" name="interest[]" value="collector">Die-hard collector<br><br>

<input type="submit" value="Submit"><br>

</form>

</body>
<?php include 'Index_Footer.css';?>
</html>