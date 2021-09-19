<?php

  session_start();

  $page = 'index2.php';

  include "config.php";
  mysql_select_db('cart') or die (mysql_error());

  function products()
  {
    $get =mysql_query('SELECT id, name, description, price FROM products WHERE quantity > 0 ORDER BY id DESC');
    if (mysql_num_rows($get)==0)
    {
     echo "there is no product to display";
    }
    else
    {
      echo "success";
    }
  }


?>