
<?php

class oop
{
	
	function __construct()
	{
		include "dbcon.php";
		mysql_query("SET NAMES utf8");
	}
	public function redir(){
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'index_bk.php';
		header( "refresh: 3; url=./$extra" );
		
		exit;
	}
}
$op = new oop;
$num = $_POST['numx'];
$name =$_POST['name'];
$gender = $_POST['sex'];
$class = $_POST['room'];
$deprment = $_POST['deprment'];
$faculty = $_POST['faculty'];

$sql = "SELECT id FROM tb_studen WHERE id='$num'";

$res = mysql_query($sql);
$row = mysql_num_rows($res);

if($row!=0){
	echo "ข้อมูลซำ้...";
	$op->redir();
}
$sql= 'INSERT INTO tb_studen (id,name,gender,class,deprment,faculty) VALUES ('."'$num','$name','$gender','$class','$deprment','$faculty')";
$gg = mysql_query($sql);
if(!$gg){
	echo "error... ";
}else{
	echo "เพิ่มเรียบร้อย...";
	$op->redir();

}

?>
