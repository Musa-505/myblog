<?php

$sname = "localhost";

$uname = "root";

$password = "";


$db_name = "port";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn){
	echo "Connecting failed!";
}

?>