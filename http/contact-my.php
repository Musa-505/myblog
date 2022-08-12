<?php

session_start();

$id = 0;
$mysqli = new mysqli('localhost', 'root', '', 'port') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
	$oname = $_POST['oname'];
	$oemail = $_POST['oemail'];
	$osubject = $_POST['osubject'];
	$omessage = $_POST['omessage'];

	header("Location: ../index.php#contact");
	$mysqli->query("INSERT INTO contact (oname, oemail, osubject, omessage) VALUES('$oname', '$oemail', '$osubject', '$omessage')") or die($mysqli->error);
}

?>