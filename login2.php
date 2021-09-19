<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email&&$password)
{
	$connect = mysql_connect("localhost","root","") or die("Could'nt connect to DB");
	mysql_select_db("login") or die ("Could'nt find database");
	
	$query = mysql_query("SELECT * FROM users WHERE email='$email'");
	
	$numrows = mysql_num_rows($query);
	
	if($numrows!=0)
	{
		while($rows = mysql_fetch_assoc($query))
		{
			$dbemail = $rows['email'];
			$dbpassword = $rows['password'];
		}
		
		if ($email==$dbemail&&$password==$dbpassword)
		{
			echo "Login Successful. <a href='index2.php'>Click here to enter member's area</a>";
			$_SESSION['email']=$dbemail;
		}
		
		else
			echo "Incorrect Entry";
	}
	
	else
		die ("The user doesnot exist.");
	
}
else
	die ("Please enter a email and password");
?>