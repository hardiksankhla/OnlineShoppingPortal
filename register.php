<?php
 session_start();
include"config.php";

$email =$_POST['email'];

$fname =$_POST['fname'];

$lname = $_POST['lname'];

$password = $_POST['password'];

if ($email&&$fname&&$lname&&$password)
 {
   $insert ='INSERT into users(email, firstname, lastname, password) VALUES("'.$email.'","'.$fname.'","'.$lname.'","'.$password.'")';

   mysql_query($insert);
   
   echo "Thank you for registering.";
   echo "<p></p>";
   echo "Login Successful. <a href='memberspage.php'>Click here to enter member's area</a>";
			$_SESSION['email']=$dbemail;
 
 }
else
 echo "please enter all the fields";
?>