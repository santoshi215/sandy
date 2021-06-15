<?php

include 'connection.php';


if(isset($_POST['submit']))

{
    
$name=$_POST['username'];
 // print_r($name);
  $password=$_POST['password'];
 //print_r($password);
    
$query=" SELECT * FROM users where username = '".$name."'";
	
	
$q=" SELECT password from users where username='".$name."';";
	

	$res=mysqli_query($conn,$query);
	
	

	$num=mysqli_num_rows($res);
	
	
if($num){
		
$decode_password=($password);
//print_r($decode_password);
while($row = $res->fetch_assoc())
	{
		$fatch_password=$row["password"];
//	print_r($fatch_password);


		if($fatch_password==$decode_password)
          
		{
			
			//echo "welcome '".$name."'";
			session_start();
			$_SESSION['username']=$name;
			//print_r($_SESSION['username']);
			header('location:display.php');
			
		}
			else
				{
				
					echo "password incorrect!!! try again...";
			
				}
	}
		
		
}
	
else {
    echo "user not found.";
       
  }
	
	


$conn->close();
     
	 
	
 
	

}

?>
