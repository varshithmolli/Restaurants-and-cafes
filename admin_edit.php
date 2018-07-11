<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
	<meta charset="utf-8">
	<meta name="author" content="saikiran seepana">
</head>
<?php
global $id1;
session_start();
$id1 = $_GET['id'];
$_SESSION['id'] = $id1;
?>
<body bgcolor="lightgrey">
	<form method="POST" action="admin_edit1.php" enctype="multipart/form-data">
		<table align="center" style="position: relative;top:100px;">				
				<tr>
					<td>Name : </td> 
					<td><input type="text" name="rname"></td>
				</tr>
				<tr>
					<td>Restaurant Ratings : </td>
					<td><input type="text" name="rat"></td>
				</tr>
				<tr>
					<td>File : </td>
					<td><input type="file" name="file"></td>
				</tr>
				<tr>
					<td> location : </td>
					<td><input type="text" name="loc"></td>
				</tr>
				<tr>
					<td><label> Address : </label></td>
					<td><input type="text" name="rad"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
				</tr>
			</table>
	</form>
</body>
</html>