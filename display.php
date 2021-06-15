<?php

session_start();

if(!isset($_SESSION['username'])){

	header('location:index.php');
}

?>

<html>

<head>



<style> 




#scroll {
                margin:4px, 4px;
                padding:4px;
				
                background-color: green;
                width: 500px;
                height: 110px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
            }


#div1{
	
	background-color: #b5d51d;
	height: 100px;
	width: 100%;
	border-radius: 10px;
}

  body
       {
       border: 2px solid white;
       border-radius: 5px;
       background-color: white;
       margin: 0;
       width: 85%;
         padding-left: 30px;
          padding-right: 30px;
       }

#div_welcome{
	float: left;
	
	margin-left:4% ;
	
}
#div_name
{
	
	
	margin-left:11.5% ;
	font-weight: bold;
	
}
#b1 {
    border: none;
	margin-right: 4%;
	background: none;
    cursor: pointer;
    margin: 0;
    padding: 0;
	
}

#left{
	padding-top:40pt;
	margin-left: 4%;
	
}
#bold{
	font-weight: bold;
}
#left2{
	overflow-y: auto;
	padding-top:00pt;
	margin-left: 0%;
	border: 1px solid #000;
	height: 600px;
  width: 25%;
  
              
}
#left1{
	padding-top:00pt;
	margin-left: 4%;
	border: 1px solid #000;
	height: 600px;
  width: 90%;
}
#left3
{
	height: 600px;
	border: 1px solid #000;
	float: right;
	width:74%;
	
}
#text1{
	font-weight: bold;
	color:#000;
	font-size:15pt;
}
#left4
{
	border: 1px solid #000;
	height: 400px;
}

#left5
{
	border: 1px solid #000;
	height: 50px;
	padding: 5pt;
}

</style>



</head>

<body>

<?php

	include 'connection.php';

$name=$_SESSION['username'];

$id=array();
$Fullname=array();
$MobileNumber=array();
$email=array();
$messege=array();
$date_time=array();

					$fullname_array="";
					$mobile_array= "";
					$email_array= "";
					$messege_array= "";
					$date_time_array= "";
				  

$recipient="SELECT * from demo ORDER BY id DESC ";
//print_r($recipient);
$res=mysqli_query($conn,$recipient);
$result=mysqli_num_rows($res);
$count=0;
	if($result)
	{
			while($row=$res->fetch_assoc())
			{
				$id[]=$row['id'];
				$Fullname[]=$row['Fullname'];	
				//print_r($Fullname);
				$MobileNumber[]=$row['MobileNumber'];
				$email[]=$row['email'];
				$messege[]=$row['messege'];
				$date_time[]=$row['date_time'];
				$count++;
				//print_r($count);
			}			
//print_r($count);
						function trimm($a){
				$str= substr($a, 0, 10);
				echo $a;
	}
	}
	
if (isset($_GET['id'])) 
	{
		 $id_get=$_GET['id'];
		 $query1="SELECT Fullname,MobileNumber,email,messege,date_time from demo where id=".$id_get;
		 
		$res = mysqli_query($conn, $query1);

		if ($res) {

					$row = mysqli_fetch_row($res);
					$fullname_array= $row[0];
					$mobile_array= $row[1];
					$email_array= $row[2];
					$messege_array= $row[3];
					$date_time_array= $row[4];
				  }

		mysqli_free_result($res);
  
  
	} 
 
	?>
	
<div id="div1">
 <div style="float: right; padding-top:0pt;padding-right:50pt;">
 <form action="logout.php">
 <button id="b1"style="font-size:15pt;color: white;"  type="submit" name="logout">
 <p>Logout  <img src="logout.png" height="20px" width="20px" alt="logout here" /> </button>
 </form>
 </div>
  <div style="float: left;padding: 3px; margin-left: 5%; width: 70px;  height: 70px;  border: 5px solid #fff; border-radius: 50%;padding: 5px;" >
  <img src="smpsmp.png" alt="image"  height="65px" width="65px"/></div>
 <div id="div_welcome"><p style="font-size:15pt;width: 10px;height: 10px;color: white;">welcome</p></div></br>
 <div id="div_name"><p style="font-size:25pt;margin-left: 6%; color: white;"><?php echo $_SESSION['username'] ?></p></div>

 
</div>
</div>
<div id="left">
<h1 id="bold"> MESSEGES (<?php echo $count; ?>)</h1>
<h3 id="bold"> New Messages</h3>
</div>
<div id="left1" >
<div id="left3">

<div style="padding:10pt;">
<p id="name" style="font-weight: bolder;"><b>Recipient Name :<?php echo $fullname_array; ?></b></p>
<p id="date_time"> date and time :<?php echo $date_time_array; ?> </p>
</br>

<span><b>mobile Number :</b></span>

<span id="number"><?php echo $mobile_array;?></span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span><b>Email :</b></span>

<span id="email"><?php echo $email_array; ?></span>


<div id="left4"> 

<b>
<p id="message"> messege :</p>
</b>
<p id="messege"> <?php echo $messege_array; ?></p>

</div>
</br>
</div>


</div>



<div id="left2">
<?php    for($x = 0; $x < $count ;$x++){   ?>

<a href="display.php?id=<?php echo $id[$x]; ?>">

<div id="left5"> 

<?php 
echo $Fullname[$x]."</br>".$messege[$x];
?>
</div>
</a>

<?php
}; ?>



</div>




</div>
</body>
</html>