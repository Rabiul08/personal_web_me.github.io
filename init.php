<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "tt";

$con =mysqli_connect($host,$user,$password,$dbname);

if(!$con)
{
	//die("Error in database connection".mysqli_connect_error());
	
}
else
{
	 //echo"<h3> Database Connection success...";
}



?>
