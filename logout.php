<?php 

  session_start();
  unset($_SESSION['loggedinUser']);
  session_destroy();
  header('location:login.php');

?>