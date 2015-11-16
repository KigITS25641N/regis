
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






$filename = $_FILES['fileField']['name'];
	$pat = getcwd().DIRECTORY_SEPARATOR;
	$jp = explode('.', $filename);
	$path = $pat.'images/';
	$filename = $_POST['numx'].'.jpg';
	
	if($jp[count($jp)-1]=='jpg'){
		echo "jpg";
		   $target = $path.$filename;
		   move_uploaded_file($_FILES['fileField']['tmp_name'] ,$target);
		   echo "Upload commpese :: ".$target."<br>";
		   echo $filename;
		  

       	}else{
      		echo"<script language=\"JavaScript\">";
			echo 'alert("File extensions .'.$jp[count($jp)-1].' Please only upload .jpg")';
			echo"</script>";
			

      	}
      




 //insert sql     
$sql = "SELECT id FROM tb_studen WHERE id='$num'";

$res = mysql_query($sql);
$row = mysql_num_rows($res);

if($row!=0){
	echo "ข้อมูลซำ้...";
	$op->redir();
}
$sql= 'INSERT INTO tb_studen (id,name,gender,class,deprment,faculty,photo) VALUES ('."'$num','$name','$gender','$class','$deprment','$faculty','$filename')";
$ts1 = mysql_query($sql);
$sql= "INSERT INTO tb_login (id) VALUES ('$num')";
$ts2 = mysql_query($sql);

if(!$ts){
	//echo "error... ";
	$op->redir();
}else{
	echo "เพิ่มเรียบร้อย...";
	$op->redir();
}

?>
