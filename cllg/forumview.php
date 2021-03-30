<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Konnect - Forum
	</title>
	<link rel="stylesheet" href="prof_style.css">
	<link rel="stylesheet" type="text/css" href="forumstyle.css">
</head>
<body>
	<div class="header">
            <div class="hlink">
                <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;"><h1>KONNECT</h1></a>
            </div>
	</div>
	<div class="navbar">
        <a href="home.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="achievements.php">Acheivements</a>
        <a href="#academics">Academics</a>
        <a href="#placements">Placements</a>
        <a class="active" href="#">Forum</a>
        <a heref="#about" style="float: right;">About</a>
    </div>
    <div>
    	<h1 align="center" style="font-size: 50px; color: red; font-family: cursive;">FORUM</h1>
    	<br>
    </div>
    <h3 style="margin-left: 15%; font-size: 30px; color:blue; ">Public Posts</h3>
    <div class="box">
    	<?php
            $con=mysqli_connect("localhost","root","pranay123","kmitregis");
            $qu="select * from forum order by id desc";
            $res=mysqli_query($con,$qu);
            $c=mysqli_num_rows($res);
            if($c==0){
                echo "No Posts";
            }
            else{
                while($row=mysqli_fetch_row($res)){
    				$u=$row[1];	$n=$row[2];$d=$row[3];$m=$row[4];
                    $q1="select userimg from regisinfo where username like '$u'";
                    $r1=mysqli_query($con,$q1);
                    $r1=mysqli_fetch_row($r1);
    				$loc="userimg/".$r1[0];
    				echo "<div class='msg'><img src=$loc width='35px' height='35px'><b>$n</b>"."[$u]".":&nbsp&nbsp$m&nbsp<p style='margin:0px; color:lightgrey;' align='right'>$d</p></div>";
    			}
    		}
    	?>
    	<!-- <div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div> -->
    </div>
    <br><br>
    <h3 style="margin-left: 15%; font-size: 30px; color:blue; ">Post Your Query</h3>

    <div class="mybox">
    	<form action="forum.php" method="post">
    		<textarea class="text" name="msg" rows="2" required></textarea>
    		<button type="submit">Send</button>
    	</form>
    </div>
</body>
</html>