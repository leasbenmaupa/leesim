<!DOCTYPE>
<html>
<head>
<title>Again</title>
</head>
<body>
<?php
$conn=mysql_connect('localhost','root','password');
if(!$conn){
	die("Connection Error: " .mysql_error());
}
mysql_select_db("trust",$conn);

$sql="CREATE TABLE(
	id int(8) primary key auto_increment,
	firstname varchar(30),
	lastname varchar(40),
	address varchar(20)
	)";
	
mysql_query($sql,$conn);

mysql_close($conn);
?>
</body>
</html>
