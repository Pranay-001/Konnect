<?php
session_start();
if(!isset($_SESSION['fname'])){
	header('location:login1.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Konnect - Home
	</title>
	<link rel="stylesheet" href="forum_Style.css">
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="konnect.css">
        <script src="https://kit.fontawesome.com/fa40053145.js" crossorigin="anonymous"></script>
	<style>
		body{
			margin: 0;
		}
		.p2{
			float: right;
			font-size: 25px;
  			color: red;
		}
        #loginButton:hover{
                color: red;
                text-decoration: none;
        }
	</style>
</head>
	<body>
		
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
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span> Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="profile.php"><span class="fa fa-user-circle fa-lg"></span> Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="./card.html"><span class="fa fa-file fa-lg"></span> Files Shared</a></li> 
                        <li class="nav-item"><a class="nav-link" href="achievements.php"><span class="fa fa-trophy fa-lg"></span> Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#placements"><span class="fa fa-star fa-lg"></span> Placements</a></li>     
                        
                    </ul>
                    <span class="navbar-text">
                        <a id="loginButton" href="logininfo.php?"><span class="fa fa-sign-in"></span> Log Out</a>
                    </span>
                </div>
            </div>
        </nav>
    <!-- Add -->
    <div style="top:0rem; min-height: 100vh;max-height:100vh; overflow-y: scroll; padding: 4px;"id="add" class="click-add">
        <div class="add-in">
        	<h4 style="float: right; margin: auto;"><a href="home.php"><img style="height: 2rem; width:2rem;" src="icons/cross.png"></a></h4>
        	<h1 style="font-size: 5rem; color:blue;">Your Post</h1>
        	<div><img id="your-post" style="height: 15rem; width: 15rem;" alt="Your image" /></div>
        	<div class="post">
    	    	<form action="forum.php" method="POST" enctype="multipart/form-data">
    	    		<input id="pic" onchange="display(event);" type="file" name="file"><br><br>
    	    		<textarea class="text" name="msg" rows="2" placeholder="Caption..." required></textarea>
                    <br><br><br>
                    <textarea class="text" name="article" rows="7" placeholder="Content..." required></textarea>
                    <br>
    	    		<button class="send" type="submit">Send</button>
    	    	</form>
    	    </div>
        </div>
    </div>


    <div>
    	<h3 style="margin: auto; width:50%; font-size: 3rem; color:blue;">Feed</h3>
    	<h2 style="margin:1rem; float:right;"><a href="#add" onclick="showadd('add')">Add</a>&nbsp;<img style="height: 60px; width:50px; " src="icons/add.png"></h2>
    </div>
    <br> 
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

    				$id=$row[0];$u=$row[1];$n=$row[2];$d=$row[3];$m=$row[4];$img='post/'.$row[5];$ar=$row[6];

                    $q1="select userimg from regisinfo where username like '$u'";
                    $r1=mysqli_query($con,$q1);
                    $r1=mysqli_fetch_row($r1);
    				$loc="userimg/".$r1[0];
    				echo "<div class='msg'><img class='dp' src=$loc width='38px' height='28rem'><b>$n</b>"."["."$u"."]".":"."<br><br><div style='text-align: center; max-height:30rem;overflow-y:scroll;'><div><img  alt=$img src=$img style='height:30rem;width:30rem;'></div>"."&nbsp&nbsp$m&nbsp<p style='margin:0px; color:lightgrey;' align='right'>$d</p></div><i style='color:black'class='fa fa-comment' aria-hidden='true'></i>
                        <a  style='text-decoration:none; color:blue;'  onclick=showadd('comments',$id) href='homeComment.php?x=$id'>Comments</a><a style='text-decoration:none; float:right; color:blue;' href='tp.php?ar=$ar';><i style='color:black'; class='fa fa-eye' aria-hidden='true'></i> View</a>
                        </div><br><br>";
    			}
    		}
    	?>
    	<!-- <div class="msg"><img class="dp" src="dp.jpg" width="35px" height="30rem"><div class="" style="text-align: center;"><img style="height:25rem; width:15rem;" src='icons/add.png'/></div>
						&nbsp;&nbsp;&nbsp;hi how r u?</div>
 -->    	<!-- <div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div>
    	<div class="msg"><img src="dp.jpg" width="35px" height="35px">hi how r u?</div> -->
    </div>
    <script type="text/javascript">
        function showadd(id1,postnum){
            if(postnum!==undefined){
                document.getElementById("post-id-inp").value=postnum;
            }
            show(id1);
        }
        function show(id1){
            document.getElementById(id1).style.visibility="visible";
            document.getElementById(id1).style.position="sticky";

        }
        function display(event){
            if(event.target.files.length>0){
                var src=URL.createObjectURL(event.target.files[0]);
                var prev=document.getElementById("your-post")
                prev.src=src;
            }
        }
        function s1(st1){
            console.log(st1);
            // alert(st1+"");
        }
    </script>
</body>
</html>

