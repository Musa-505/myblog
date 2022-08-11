<?php 
session_start();
include "conn-db.php";
if (isset($_POST['login']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$login = validate($_POST['login']);
	$password = validate($_POST['password']);

	if (empty($login)) {
		header("Location: ../page/login.php?error=Login not required");
		exit();
	}
	elseif (empty($password)) {
		header("Location: ../page/login.php?error=Password not required");
		exit();
	}else{
		$sql = "SELECT * FROM login WHERE login='$login' AND password='$password' ";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1){
			$row = mysqli_fetch_assoc($result);
				if ($row['login'] === $login && $row['password'] === $password){
					$_SESSION['login'] = $row['login'];
					$_SESSION['password'] = $row['password'];
					$_SESSION['id'] = $row['id'];
					header("Location: ../page/home.php");
					exit();
				}else{
					header("Location: ../page/login.php?error= Incorect Login or password");
				}
			}
		else{
			header("Location: ../page/login.php?error= Incorect Login or password");
		}
	}
}else{
	header("Location: ../page/login.php?error");
	exit();
}