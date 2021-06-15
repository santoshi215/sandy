

<?php
session_start();
include 'connection.php';
$email=$_SESSION['username'];
if(isset($_POST['reset']))
{
	echo ("hi...");
	$newpass=$_POST['newpass'];
	//print_r($newpass);
	$vernewpass=$_POST['vernewpass'];	
	//print_r($vernewpass);
				if($newpass==$vernewpass)
				{
					
					
					$reset_query="UPDATE `users` SET `password`='".$vernewpass."' WHERE email='".$email."'";
					
					$result_reset=mysqli_query($conn,$reset_query);
					if($result_reset)
						{
							if(mysqli_affected_rows($conn)>0)
							{
								
							echo("password reset succefully");		
							
								//header('location:index.php');
							}
							else
							{
								echo("no row effect");
							}
					
						}
					else{
						    echo("no result from query");
						}
				}
				else
				{
					echo("password doesn't match");
				}

}
?>

<html>

<style>


.body{
    height: 100%;
    margin: 0;
    padding: 0;
   
}
.submit{
	
  margin: 15px 150px;
  border: none;
  border-radius: 4px;
  
}

.login{
    width:350px;
    margin-top: 1000px; 
    margin: auto;
    margin-right:450px;
    padding: 40px;
    background: white;
    border-radius: 15px;
   
}

h4{
    text-align: center;
    color: #277582;
    padding: 20px;
}
label{
    color: black;
    font-size: 17px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}



</style>

    <head>
         
        <title>set password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body style="background-color: yellowgreen" >
	
		<div class="login" >
		<form  method="post" action="" >
			
				<h4><b>RESET PASSWORD</b></h4>  
			
              <label for="fname">new password:</label><br>
              <input type="text" id="new password" name="newpass" placeholder="new password"><br>
			  <label for="fname">confirm password:</label><br>
              <input type="text" id="confirm password" name="vernewpass" placeholder="confirm password"><br>
                   <div class="submit">
                 
                 <input type="submit"  name="reset" value="reset">
                 </div>
              </form>
		</div>



   </body>

</html>
		