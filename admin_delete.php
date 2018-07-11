<?php
	global $id1;
	include ("db.php");
	session_start();
	$id1 = $_GET['id'];
	$_SESSION['id'] = $id1;
	//$id1 = $_SESSION['id'];

	$res = mysqli_query($conn, "DELETE from restaurants  WHERE restaurant_id = $id1");
	if($res)
 		{
 			header("Location:adminpage.php");
 		}

 	mysqli_close($conn); 
 ?> 
