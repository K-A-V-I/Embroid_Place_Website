<?php
$hostname="localhost"; 
$username="root";  
$password="";       
$database="client";  
$con = mysqli_connect($hostname,$username,$password);
if(! $con)
{
die('Connection Failed'.mysqli_error());
}
mysqli_select_db($database,$con);
?>