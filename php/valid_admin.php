<?php
$id=$_POST['un'];
$pas=$_POST['pwd'];
if(($id=="admin") && ($pas=="admin"))
{
	echo "hi";
	header("Location:adminpage.php");
}
else
{
	echo "Invalid credentials";
}