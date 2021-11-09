<?php
$server="localhost";
$user="root";
$password="";
$db="alpha";
$conn=mysqli_connect($server,$user,$password,$db);
if(!$conn)
{die("Not connected".mysqli_connect_error());}
?>