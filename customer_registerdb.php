<?php

	include("db.php");

	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($conn,$_POST['name']);
		$mobileno = mysqli_real_escape_string($conn,$_POST['mobileno']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		$res = mysqli_query($conn,"INSERT INTO customer (name, password, mobileno, email) VALUES ('$name' , '$password' , '$mobileno' , '$email') ");
		if ($res) {
			echo "Registered sucessfully";
			header("Location:orderfood.php");
		}
	}
?>