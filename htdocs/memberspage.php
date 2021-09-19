<?php
session_start();

if($_SESSION['email'])
 {
  echo "you are logged in as : ".$_SESSION['email'];
  echo "<p><p>";
  echo "<a href='logout.php'>Click Here to Logout</a>";
 }
 
 else
	header ("location: index.html");
?>
