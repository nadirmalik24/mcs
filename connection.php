<?php
//session_start();
$connection = mysql_connect("localhost","root","");
if ($connection)
   {
	   mysql_select_db("medexp",$connection) or die ("connection to database is not established ".mysql_error());
   }
else
   {
	   echo "Connection to server is not established ".mysql_error();
   }   
?>