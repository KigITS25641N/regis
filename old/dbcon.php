<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
$host ='localhost';
$user='std256402241013';
$pass="256402241013"; 
$conn = mysql_connect($host,$user,$pass);
if(!$conn){
	echo "ตดต่อมไม่ได้";
	exit();

}
$sec = mysql_select_db("db256402241013");
if(!$sec){
	echo "เชื่อมต่อมไม่ได้";
}
mysql_query("SET NAMES tis620");

 ?>

</body>
</html>