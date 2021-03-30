<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Konnect
	</title>
	<style>
		.login-form{
			border: 4px solid black;
			width: 200px;
			height: 20px;
			padding: 10px;
			margin: 10px;
			text-align: center;
		}
		#login:hover{
			background-color: rgba(255,127,80,0.7);
			cursor: pointer;
		}
		.inp,.login-submit{
			color: cyan;
		}
		.login-submit{
			padding: 10px;
			width: 226px;
			background-color: rgba(10,175,10,0.5);
			text-align: center;
			border:4px solid black;
			pointer-events: auto;

		}
		.help{
			position:absolute;
			color: cyan;
			top: 18px;
  			right: 125px;
		}
		.img{
			background-color:transparent; 
		}
		.body{
			background-image: url("https://img.freepik.com/free-vector/abstract-technology-particle-background_52683-25766.jpg?size=626&ext=jpg");
			background-size:  cover;
		}
	</style>
</head>
	<div class="img">
			<img src="logo.gif">	
			<a class="help" href="" >Help</a>
	</div>
	<body class="body">
		<div>
			<h1 style="color: red; text-shadow: 2px 2px 5px blue; padding-right:0px;" align="center">KONNECT Login</h1><br>
			<div align="center">
				<form  action="logininfo.php" method="post">
					<label class="inp" for="name"  >Username*</label><br>
					<input class="login-form" type="text" name="name" placeholder="roll no." required><br>
					<label class="inp" for="password">Password*</label><br>
					<input class="login-form" type="password" name="password" placeholder="*******" required><br><br>
					<button  id="login" class="login-submit" style="color: black">Submit</button>	
				</form>
			</div>
			<p align="center">
				<b><a style="color: cyan; text-decoration: none; padding-right: 0px; " href="forgotPass.php">Forgot Password?</a></b>
			</p>
			<p align="center">
				<b><a style="color: cyan; text-decoration: none; padding-right: 0px;" href="registration.php">Create an account</a></b>
			</p>
		</div>
	</body>
</html>

<?php
	if(isset($_SESSION['name'])){
		if($_SESSION['name']=="-1-1"){
			echo "<script  type='text/javascript'>alert('Invalid login');</script>";
			session_destroy();
		}
	}
?>