<?php

session_start();

$id = 0;
$mysqli = new mysqli('localhost', 'root', '', 'port') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
	$tname = $_POST['tname'];
	$codeone = $_POST['codeone'];
	$codeonez = $_POST['codeonez'];
	$codetwe = $_POST['codetwe'];
	$codetwez = $_POST['codetwez'];
	$codethree = $_POST['codethree'];
	$codethreez = $_POST['codethreez'];
	$onename = $_POST['onename'];
	$twename = $_POST['twename'];
	$threename = $_POST['threename'];

	header("Location: ../index.php#static");
	$mysqli->query("INSERT INTO stati (tname, codeone, codeonez, codetwe, codetwez, codethree, codethreez, onename, twename, threename) VALUES('$tname', '$codeone', '$codeonez', '$codetwe', '$codetwez', '$codethree', '$codethreez', '$onename', '$twename', '$threename')") or die($mysqli->error);
}
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM stati WHERE id=$id") or die($mysqli->error());
	header("Location: ../page/home.php");
}

?>