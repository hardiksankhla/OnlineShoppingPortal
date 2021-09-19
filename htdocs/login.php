<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

?>
<html xmlns="http://www.w3.ord/1991/xhtml">

<head>
	<meta http-equvi="Content-Type" content="/text/html; charset=utf-8" />
	<title>Member System - Login</title>
</head>
<body>

	<?php
	
	$form = "<form action='./login.php' method='POST'>
	
	<table>
	<tr>
		<td>Username:</td>
		<td><input type='text' name='user' /></td>
	
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type='text' name='password' /></td>
	
	</tr>
	<tr>
		<td></td>
		<td><input type='submit' name='loginbtn' value='Login' /></td>
	
	</tr>
	
	</table>
	</form>";
	
	if($_POST['loginbtn'])
	{
		$user = $_POST['user'];
		$password = $_POST['password'];
		if($user)
		{
			if($password)
			{
			echo "$user - $password <hr /> $form";
			}
			else
				echo "You must enter your password. $from";
		}
		else
			echo "You must enter your username. $form";
	}
	else
		echo $from;
	
	?>
</body> 
</html>