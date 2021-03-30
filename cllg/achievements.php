<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Konnect-Achievements</title>
        <link rel="stylesheet" href="AchievementsCss.css">
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="konnect.css">
        <script src="https://kit.fontawesome.com/fa40053145.js" crossorigin="anonymous"></script>
        <style>
            #fileupload{
                margin-top: 30px;
                padding: 20px;
                border: 1px solid black;
            }
            select{
                padding: 4px;
                width: 220px;
                height: 32px;
                text-indent: 4px;    
            }
            #loginButton:hover{
                color: red;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <!-- <div class="header">
            <div class="hlink">
                <a href="home.php" style="color: rgb(255, 255, 255); text-decoration: none;"><h1>KONNECT</h1></a>
            </div>
        </div>
        <div class="navbar">
            <a href="home.php">Home</a>
            <a  style="font-family: cursive;" href="profile.php">Profile</a>
            <a class="active" href="#">Acheivements</a>
            <a href="#academics">Academics</a>
            <a href="#placements">Placements</a>
            <a href="forumview.php">Forum</a>
            <a heref="#about" style="float: right;">About</a>
        </div> -->
        <div class="headerx">
            <div class="hlinkx">
                <a href="#home" style="color: rgb(255, 255, 255); text-decoration: none;"><h1>KONNECT</h1></a>
            </div>
        </div>
        <nav class="navbar navbar-dark navbar-expand-sm" style="background: #292b2e;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"><a class="nav-link" href="home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php"><span class="fa fa-user-circle fa-lg"></span> Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="./card.html"><span class="fa fa-file fa-lg"></span> Files Shared</a></li> 
                        <li class="nav-item"><a class="nav-link active" href="#"><span class="fa fa-trophy fa-lg"></span> Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><span class="fa fa-star fa-lg"></span> Placements</a></li>     
                        
                    </ul>
                    <span class="navbar-text">
                        <a id="loginButton" href="logininfo.php?"><span class="fa fa-sign-in"></span> Log Out</a>
                    </span>
                    
                </div>
            </div>
        </nav>
        <div class="A_header">
            Certificates
        </div>
        <div class="add">
        	<form action="addcertificate.php" method="post" enctype="multipart/form-data">
        		<label for="certificate">Add Certificate</label><br><br>
        		<input type="file" name="certificate" required><br><br>
        		<label for="des">Description</label><br>
        		<input style="width: 90%; height: 28px; font-size: 20px;" type="text" name="des" required>
           		<br><br>
           		<input type="submit" value="ADD" class="add-btn">
           	</form>
        </div>

        <div class="rowBG">
        	<?php
        		$con=mysqli_connect("localhost","root","pranay123","kmitregis");
        		$n=$_SESSION['username'];
        		$qu="select * from achievements where username like '$n'";
        		$res=mysqli_query($con,$qu);
        		if(mysqli_num_rows($res)==0){
        			echo "<h1 align='center' style='font-size: 60px;'> Empty </h1>";
        		}
        		else{
        			while($r=mysqli_fetch_row($res)){
        				$src="certificate/".$r[1];
        				$desc=$r[2];
        				echo "<div class='row'>
			                <div class='column'>
			                    <br>
			                 	$desc
			                </div>
			                <div class='column'>
			                <a href=$src target=new><img src=$src width='250px' height='250px'></a>
			                </div>
			            </div>";
        			}
        		}
        	?>
        </div>
    </body>
</html>