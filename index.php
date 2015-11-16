<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="./css/stype.css">
	<meta charset="UTF-8">
	<title>login</title>
	<style type="text/css" media="screen">
		.login{
			text-align: center;
			 width: 470px;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div class="login">
	<font size="18px" >Login</font><p>
	<form action="login.php" method="post" accept-charset="utf-8">
		Username :: <input type="text" name="user" placeholder="Username"><br><br>
		password :: <input type="password" name="passwd" placeholder="Password"><br><br>
		<input type="submit" value="Login">
		<input type="button" onclick="location.href='./logout.php';" value="logout" >
	</form>
	</div>
</body>
</html>