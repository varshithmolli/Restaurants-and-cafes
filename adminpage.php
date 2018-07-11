<!DOCTYPE html>
<html>
<head>
	<title>admin login page</title>
	<meta charset="utf-8">
	<meta name="author" content="saikiran seepana">

	<style type="text/css">
		body
		{
			background-color: lightgreen;
		}
	</style>
</head>
<body>
	<div align="center" style="position: relative; top: 50px;">
		<table style="width:50%;" border="1">
			
			<?php 
				session_start();
				include("db.php");
				echo " 
				<tr>
					<td colspan='4' align='right' style='padding:10px;'>
						<a href='logout.php'><input type='submit' name='logout' value='logout'></a>
					</td>
				</tr>
				<tr>
					<td colspan='2' style='padding:20px'>
						<font size='5px'>To insert in to data base</font>
					</td>
					<td colspan='2' align='center'>
						<a href='admin_insert.html'><input type='submit' name='insert' value='insert'></a>
					</td>
				</tr>
				";
				$res = mysqli_query($conn,"SELECT * FROM restaurants");
				while ($row = mysqli_fetch_row($res)) {
					$id = $row[0];
					echo "
							<tr>
						 		<td style='padding:10px;width:30%;'><img src='uploads/$row[4]' style='width:200px;height:150px;'></img></td>
						 		<td style='padding:10px;width:20%;'>$row[1]</td>
						 		<td style='padding:10px;width:30%;'>$row[8]</td>
						 		<td style='padding:10px;width:20%;'><a href='admin_edit.php?id=$id'><input type='submit' name='submit' value='edit'></a><a href='admin_delete.php?id=$id'><input type='submit' name='delete' value='delete'></a></td>
						 	</tr>
					";
				}
			?>
		</table>
	</div>
	
</body>
</html>