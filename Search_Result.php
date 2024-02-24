<?php
session_start();
?>
<html>
<head>
<title>Search Result</title>

<?php include 'Secret_Header.css';?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Index.css">

</head>

<body>
Search Result<br><br>

<?php
$name = $_POST['un'];
$query = " SELECT * FROM animatronics WHERE name LIKE '%$name%' ; " ; 

echo "Entry: " . $name ;
echo "<br><br><br>" ;
"Query Statement: " . $query ;


include 'Spirit_connection.inc' ;

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
  
$result = mysqli_query($con, $query);


while($row = mysqli_fetch_array($result)) {
  echo $row['Name'] . " : " . $row['Year'] . " : " . $row['Manufacturer'] . " : " . $row['Price'] . " : " .$row['Category'] ;
  echo "<br>";
}

mysqli_close($con);
?>

</body>
</html>