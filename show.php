<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>แสดงข้อมูล</title>

<link rel="stylesheet" type="text/css" href="./css/stype.css">

</head>
<body>
<div class="login">
แสดงข้อมูล<br>
<?php 
session_start();
echo '<p>'.$_SESSION['name'];?>
<br>
<form action="" method="get" accept-charset="utf-8">
	<?php
	$a = '';
	if(!empty($_GET['search'])){
		$a = $_GET['search'];
	}
	
	echo '<input type="text" name="search" value="'.$a.'" placeholder="search">';
	?>
	<select name="fieldsearch">
		<option value="id">รหัสนักศึกษา</option>
		<option value="name">ชือ-นามสกุล</option>
		<option value="class">ห้อง</option>
	</select>
	<input type="submit" name="ค้นหา">
</form>


<?php
include "dbcon.php";
mysql_query("SET NAMES utf8");
 if(!empty($_GET['search'])){
 	$se = $_GET['search'];
 	$name = $_GET['fieldsearch'];
 	$sql = "SELECT * FROM tb_studen WHERE $name LIKE '%$se%' ORDER BY id ASC";
 }else{
	$sql = "SELECT * FROM tb_studen ORDER BY id ASC";
}
$result = mysql_query($sql);
echo '<table border="1">';
echo '<tr class="gt"><th>NO</th><th>ID</th><th>NAME</th><th>gende</th></th><th>class</th><th>deprment</th><th>faculty</th><th>ลบ</th><th>แก้ไข</th><th>รูป</th></tr>';
$i=0;
while($row=mysql_fetch_array($result)) {
      echo '<tr><th>'.$row['no'].'</th><th>'.$row['id'].'</th><th>'.$row['name'].'</th><th>'.$row['gender'].'</th></th><th>'.$row['class'].'</th><th>'.$row['deprment'].'</th><th>'.$row['faculty'].'</th><th>';
      echo '<a href="del.php?id='.$row['no'].'" onclick="return confirm(\'คุณต้องการลบหรือไม่?\');">ลบ</a>';
      echo '</th><th>';
      echo '<a href="./edit.php?id='.$row['no'].'" >แก้ไข</a></th>';
      echo '<th><img src="./images/'.$row['photo'].'" alt="Smiley face" height="50" width="50"></th></tr>';
      $i++;
  }
echo "</table>";

echo "<font size=2>นักเรียนทั้งหมด  $i คน</font>";
?>

<br>
<input type="button" onclick="location.href='./index_bk.php';" value="Return" >
</div>
</body>
</html>