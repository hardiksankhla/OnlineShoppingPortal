  <?php require 'cart.php';
  ?>

  <html>
  <head>

  </head>

  <body>
  
  <?php
  

if($_SESSION['email'])
 {
  echo "you are logged in as : ".$_SESSION['email'];
  echo "<p><p>";
  echo "<a href='logout.php'>Click Here to Logout</a>";
 }
 
 else
	header ("location: index.html");
?>

  
   <div align ="right">
   
   <table border='1'>
   <tr>
   <td>
   <div align="center">
   <p> SHOPPING CART </p>
   </div>
   </td>
   </tr>
   <tr>
   <td>     
   <?php cart() ;?>
   </td>
   </tr>
   </table>
   
   </div>
   <div align="center">
   <?php products();?>
   </div>
  </body>




  </html>