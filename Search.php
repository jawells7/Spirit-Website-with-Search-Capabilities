<?php
session_start();
?>
<html>
<head>
<title>Search</title>


<?php include 'Secret_Header.css';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Index.css">

</head>

<body>
Enter Animatronic Name, Year, Category, Manufacturer or Any Value to Search<br><br>

<form action="Search_Result.php" method="post">
What are you looking for?: <input type="text" name="un" value="c"><br><br>
<input type="submit" value="Search Database">
</form>

</body>
</html>
