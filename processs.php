<?php

include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$Message = $_POST['messege'];
	$sql = "INSERT INTO demo (Fullname,MobileNumber,email,messege,date_time)
	 VALUES ('$name','$number','$email','$messege',now())";
		 if (mysqli_query($conn, $sql)) 
	 {
		
			header('location:welcome.php');
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}



?>