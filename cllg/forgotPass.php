<?php
	// session_start();  
	if(isset($_POST["sendmail"])){
		$con=mysqli_connect("localhost","root","pranay123","kmitregis");
		$mail=$_POST["email"];
		$qu="select password from regisinfo where email='$mail'";
		$res=mysqli_query($con,$qu);
		$count=mysqli_num_rows($res);
		if($count==0){
			echo "<script type='text/javascript'> alert('No Such Account Found');</script>";
		}
		else{
			//the subject
			$sub = "Password";
			//the message
			$pass=mysqli_fetch_row($res);
			// print_r($pass[0]);
			$msg = "Konnect Password for '$mail' id is: '$pass[0]'";
			// print_r($msg);
			//recipient email here
			$rec = $mail;
			//send email
			mail($rec,$sub,$msg) or die("Not found");
			echo "<script type='text/javascript'> alert('Mail Sent');</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Konnect 
	</title>
	<link rel="stylesheet" href="registrationStyle.css">
</head>
<body>
	<div class="header">
        <div class="hlink">
            <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;"><h1>KONNECT</h1></a>
        </div>
    </div>
    <div class="fields" style="padding: 50px;">
    	<form style="background-size:  100px;" action="#" method="post">
    		<label for="email" style="font-size: 35px;">Email: </label><br><br>
    		<input style="font-size: 25px;" size="30px"  type="email" class="email" name="email" placeholder="abc@gmail.com"><br><br>
    		<input style="font-size: 25px; font-family: cursive; background-color: green;" id="sendmail" name="sendmail" type="submit" value="Send Mail">
    	</form>
    </div>
</body>
</html>
