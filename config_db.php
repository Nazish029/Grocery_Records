<?php 

$servername ="localhost";
$username ="root";
$password ="Admin1234#@";
$dbname ="grocery_record";

$base_url="http://localhost/Grocery_records/";

$var= mysqli_connect($servername,$username,$password,$dbname);

if(!$var)

{
	die(''.mysqli_connect_error());
}

else

{
	echo "";
}

?> 