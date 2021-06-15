<!DOCTYPE html>

<html>

<style>


.body{
    height: 100%;
    margin: 0;
    padding: 0;
   
}
.submit{
    position: relative;
    top:50%;
    right: -80%;
    width:  120px;
    transform: translateY(-50%);
}

.login{
    width:350px;
    margin-top: 100px; 
    margin: auto;
    margin-right:450px;
    padding: 40px;
    background: white;
    border-radius: 15px;
    height: 100%;
}
h1{
    text-align: center;
    color: #277582;
    padding: 20px;
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
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit]:hover {
  background-color: #45a049;
 margin-right: 50px;
  
}

</style>
    <head>
         
        <title>AdminPanel-Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body style="background-color: yellowgreen" >
      
        <h1 align="center" style="color:white;">ADMIN PANEL</h1>
        
		<div class="login" >
        
		
		<form  method="post" action="index.php" >
            <h4><b>LOGIN</b></h4>  
            
              <label for="fname">User name:</label><br>
              <input type="text" id="username" name="username" placeholder="username"><br>
                <label for="pass">password:</label><br>
                 <input type="password" id="password" name="password"placeholder="password" ><br><br>
                 <div class="submit">
                 
                 <input type="submit" name="submit" value="Login">
                 </div>
                 <a href="forget_pass.php" <b> Forget Password</b></a>

        </form>
		</div>
       
	   
	 <?php include 'login.php'?>



	  
    </body>

</html>



