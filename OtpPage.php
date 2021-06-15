<?php
session_start();
if(isset($_POST['sendcode']))
{
	$email=$_POST['email'];
	$randomCode=mt_rand(0,999999);
	print_r($randomCode);
	print_r($email);
	$_SESSION['random']=$randomCode;
	//$messege="your reset code is:".$randomCode;
	$messege="your reset code";
	$subject="reset code";
	$to=$email;

	 mail($to,$subject,$messege);
	
	//echo("code has been sent to".$to);
	
	$_SESSION['username']=$email;
}
if(isset($_POST['submit_otp']))
{
	$code=$_POST['otp'];
	if($code==$_SESSION['random'])
	{
		header('location:reset-password.php');
	}
	else
	{
		echo("wrong code");
	}

}
?>
<!DOCTYPE html>

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
	
         
        <title>AdminPanel-Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body style="background-color: yellowgreen" >
	         
	
	
		<div class="login" >
		<form  method="post" action="OtpPage.php" >
			
			<h4>verification</h4>
				   <label for="fname">email:</label><br>
              <input type="text" id="email" name="email" placeholder="Enter email"><br>
                   <div class="submit">
                 
                 <input type="submit"  name="sendcode"  value="sendcode">
				 
                 </div>
				 
              <label for="fname">OTP:</label><br>
              <input type="text" id="otp" name="otp" placeholder="Enter OTP"><br>
                   <div class="submit">
                 
                 <input type="submit" id="submit_otp" name="submit_otp"  value="verify otp">
				 
                 </div>
              </form>
		</div>
	
   </body>
  

</html>

