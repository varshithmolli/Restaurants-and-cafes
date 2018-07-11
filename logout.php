<?php
	session_start();
	include("db.php");
	echo "string";
	session_unset();
	if(session_destroy())
	{
		header("Location:index.html");
	}
	session_destroy();
?>