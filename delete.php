<?php 
include ('config_db.php');

$id =$_GET['id'];

$sql= mysqli_query($var,"DELETE FROM grocery_recor WHERE id='$id'");

if($sql)

{
	echo"<script>alert('Record Deleted Successfully');window.location.href='view.php'</script>";
}
?>