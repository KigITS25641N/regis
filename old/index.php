<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<font size="18px">Login</font><p>
	<form action="login.php" method="post" accept-charset="utf-8">
		Username :: <input type="text" name="user" placeholder="Username"><br><br>
		password :: <input type="password" name="pass" placeholder="Password"><br><br>
		<input type="submit" value="Login">
		<input type="button" onclick="location.href='./logout.php';" value="logout" >
	</form>

</body>
</html>