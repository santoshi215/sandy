<?php
// define variables and set to empty values


$nameErr = $emailErr =  $mobileErr ="";
$name = $number = $email =  $messege =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["number"]))
	{
     $mobileErr = "Mobile number is required</br>";
	}

 else {
	$number=test_input($_POST["number"]);
if (!preg_match ("/^[0-9]*$/", $number) ){  
    $mobileErr = "Only numeric value is allowed.</br>";  
      
} 
}
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
   
  if (empty($_POST["messege"])) {
    $messege = "";
  } else {
    $messege = test_input($_POST["messege"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}
?>



<!DOCTYPE html>
	
<html>
    <head>
        <title>second</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            
       .error {color: #FF0000;}  
       body
       {
       border: 2px solid white;
       border-radius: 5px;
       background-color: white;
       margin: 0;
       width: 95%;
         padding-left: 30px;
          padding-right: 30px;
       }
       .col1{
            border-collapse: collapse;
           background-color: yellowgreen;
           padding-top: 20px;
           padding-right: 20px;
           padding-bottom: 20px;
           padding-left: 30px;
           height: 210px;
           width: 95%;
           margin-left: 20px;
           margin-right:10px;
       }    
       
       
       
       .button {
		  
  width: 25%;
  background-color:yellowgreen ;
  color: white;
  padding: 1px 1px;
  margin: 15px 150px;
  border: none;
  border-radius: 2px;
  cursor: pointer;}
  
   .button2 {
  width: 25%;
  background-color: #4CAF50;
  color: white;
  padding: 1px 1px;
  
  margin: 15px 350px;
  border: none;
  border-radius: 4px;
  cursor: pointer;}
  
       input[type=text]{
            width: 100%;
  height: 30px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
       }
	   input[type=textarea]{
            width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  font-size: 16px;
  resize: none;
       }
       
        .smp{
           
             float: left;
            width: 40%;
            margin-top: 6px;
            alignment-baseline: central;
            margin-right: 100px;
            margin-left:  400px;
        }
            
        input {
            height: 30px;
  width: 100%;
}    
            

       
       </style>
 </head>       
        
    
    <body>
      <div class="col1">
       
            <table>    
                
            <td width ="25%"><img src="smpsmp.png"alt="wev developer" width="200" height="200"></td>
            <td width="75%"> <h1>SOME NAME</h1>
               <h2>Web Developer</h2>
                  <p> i am web Developer with three years of experience in coding, testing and establishing system improvements. Equally at home with software development for PCs, online environments, and mobile devices. </p>
            
            </table>
      </div>
                  
                  
                  
  <div class="smp">          
                 
     <h1 align="center" ><b>CONTACT ME</b></h1>
                  
   





<p><span class="error">* required field</span></p>

    <form  	method="post" action="secondpage.php">
      
  <label for="fname"><b>Full name</b>:</label><br> 
 <input type="text" id="name" name="name" placeholder="FullAME"  value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span><br>
  <label for="number"><b>Mobile number</b></label><br>
  <input type="text" id="number" name="number" placeholder="123456789" value="<?php echo $number;?>">
  <span class="error">* <?php echo $mobileErr;?></span><br><br> 
  <label for="email"><b>email</b></label><br>	
  <input type="text" id="email" name="email"placeholder="example@mail.com" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span><br>
  <br><br> 
   <label for="messege"><b>MESSAGE</b></label><br>
  <input type="textarea" id="messeage" name="messege" placeholder="some message"  value="<?php echo $messege;?>"><br>
  <br>
  
	<div class="button">
		                  <a href="home.html"><input type="submit"  target="_blank" value="back"> </a>
	</div> 
	
	<div class="button2">  	
	   <input type="submit"  name="submit"  value="Submit">
	</div>  
</form>       
     	<?php include 'processs.php';?>

</div> 




</body>
</html>
	