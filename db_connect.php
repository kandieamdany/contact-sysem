<?php
$username="root";
$password="bambuka";
$database="contacts";
$server="localhost";

$db_handle=mysql_connect($server,$username,$password);
$db_found=mysql_select_db($database,$db_handle);


?>
