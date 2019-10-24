<?php 
  session_start();

  $errmsg = array();
  $pflg = 0;

  if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
    $pflg = 1;
  }
?>