<?php
require "init.php";
$uname=$_POST["cName"];
$user_email=$_POST["cEmail"];
$user_web=$_POST["cWebsite"];
$user_msg=$_POST["cMessage"];
$sql_quary="insert into  web_data values('$uname','$user_email','$user_web','$user_msg');";
 

if(mysqli_query($con,$sql_quary))
{
	 
	 echo"<h3>Message Received! Thank you </h3>";
}
else
{
	 echo"<h1>not inserted  </h1>";
}



?>