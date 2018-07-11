<?php
	global $id1;
	include ("db.php");
	session_start();
	$id1 = $_SESSION['id'];
	echo $id1;
	if(isset($_POST['submit'])) 
	{
		$rname = mysqli_real_escape_string($conn,$_POST['rname']);
		$rad = mysqli_real_escape_string($conn,$_POST['rad']);
		//$rid1 = mysqli_real_escape_string($conn,$_POST['rid']);
		$loc = mysqli_real_escape_string($conn,$_POST['loc']);
		$rat = mysqli_real_escape_string($conn,$_POST['rat']);
		
		$file_id = rand(1000,100000)."-".$_FILES['file']['name'];
		$file = $_FILES['file']['name'];
 		$file_loc = $_FILES['file']['tmp_name'];
 		$file_size = $_FILES['file']['size'];
 		$file_type = $_FILES['file']['type'];
 		$folder="uploads/";
 
 		move_uploaded_file($file_loc,$folder.$file);

		$res = mysqli_query($conn, "UPDATE restaurants SET restaurant_name='$rname',rating='$rat',file_id ='$file_id',file='$file',file_type='$file_type',file_size='$file_size',location='$loc',restaurant_address='$rad' WHERE restaurant_id = '$id1' ");
 		if($res)
 		{
 			//echo "ERROR DESCRIPTION:". mysqli_errno() ;
 			echo "upadted succesfully";
 		}
  	} 
 	mysqli_close($conn); 
 ?> 
