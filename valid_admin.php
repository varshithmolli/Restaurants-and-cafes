<?php
session_start();
include("db.php");
$id=$_POST['un'];
$pas=$_POST['pwd'];

$res = mysqli_query($conn,"SELECT * FROM customer where name = '$id'");
$row = mysqli_fetch_row($res);

if ($res) {
	if( ( $id == "admin" ) && ($pas== "admin"))
	{
		header("Location:adminpage.php");
	}
	elseif (($id==$row[0]) && ($pas==$row[1])) {
		header("Location:orderfood.php");
	}
	else
	{
		echo "Invalid credentials";
	}
}
?>