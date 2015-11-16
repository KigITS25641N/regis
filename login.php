<?php 
	include "dbcon.php";
  	session_start();
	$user = $_POST['user'];
	$pass = $_POST["passwd"];

	
	$sql = "SELECT * FROM tb_login WHERE id='$user' AND password='$pass'";
	mysql_query("set names utf8");
$re = mysql_query($sql);
if(mysql_num_rows($re)==1){
		$id = mysql_fetch_assoc($re)['id'];
		$r=mysql_query("SELECT name FROM tb_studen WHERE id='$id'");
	    $_SESSION['name']= mysql_fetch_assoc($r)['name'];
		$_SESSION['id']=$id;
		header("Location: ./index_bk.php");
}else{
	header("Location: ./");
}


?>