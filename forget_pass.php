
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
		<form  method="post" action="forget_pass.php" >
			<h4><b>FORGET PASSWORD FORM</b></h4>  
            
              <label for="fname">User Name:</label><br>
              <input type="text" id="username" name="username" placeholder="username" required="required"><br>
                   <div class="submit">
                 
                 <input type="submit"  name="submit" value="submit">
                 </div>
              </form>
		</div>
       
	   
 <?php include 'connection.php' ;
 
	   if(isset($_POST['submit']))
		{
			$username=$_POST['username'];
  
			$query=" SELECT * FROM users where username = '".$username."'";
  
			$res=mysqli_query($conn,$query);
	
	
			$num=mysqli_num_rows($res);
	
					if($num)
							{ 
		
								$d_name=($username);

								while($row=$res->fetch_assoc())
										{
											$fetch_name=$row["username"];

											if($fetch_name==$d_name)
												{
													
														header('location:OtpPage.php');
														//echo "enter otp here....";
					
												}
											else
												{
														echo "user doesn't exists...";
												}
		
		
										}
							}
		}
	?>   
	   
  
    </body>

</html>



