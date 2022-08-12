<?php

session_start();

$id = 0;
$title = "";
$post = "";

$mysqli = new mysqli('localhost', 'root', '', 'port') or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
	$icon = $_POST['icon'];
	$title = $_POST['title'];
	$post = $_POST['post'];

	header("Location: ../page/home.php");

	if ((empty($icon)) or (empty($post)) or (empty($title))){
		header("Location: ../page/home.php?error=Post not required");
		exit();
	}else{$mysqli->query("INSERT INTO post (icon, title, post) VALUES('$icon', '$title', '$post')") or die($mysqli->error);

	}
}
if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM post WHERE id=$id") or die($mysqli->error());
	header("Location: ../page/home.php");
}

/*if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());
	$row = $result->fetch_array();
	$header = $row['headerr'];
	$post = $row['postt'];
}

if (isset($_POST['update'])){
	$id = $_POST['id'];
	$header = $_POST['headerr'];
	$post = $_POST['postt'];
	$mysqli->query("UPDATE data SET headerr='$header', postt='$post' WHERE id='$id'") or die($mysqli->error());
	header("Location: ../part/home.php");
}
*/
?>