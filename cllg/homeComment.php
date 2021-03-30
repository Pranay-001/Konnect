<?php
session_start();
if(!isset($_SESSION['fname'])){
	header('location:login.php');
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
                        <li class="nav-item"><a class="nav-link" href="achievements.php"><span class="fa fa-star fa-lg"></span> Achievements</a></li>
                        <li class="nav-item"><a class="nav-link" href="#placements"><span class="fa fa-star fa-lg"></span> Placements</a></li>     
                        
                    </ul>
                    <span class="navbar-text">
                        <a id="loginButton" href="logininfo.php?"><span class="fa fa-sign-in"></span>Log Out</a>
                    </span>
                </div>
            </div>
        </nav>


    <!-- Comments -->
    <div style="position: sticky;overflow-y: scroll; bottom: 0px; top:0px; visibility: visible;  min-height: 100vh;max-height: 100vh; padding: 4rem;" id="comments" class="click-comment">
        <div class="comment-in">
            <h4 style="float: right; margin: auto;"><a href="home.php"><img style="height: 2rem; width:2rem;" src="icons/cross.png"></a></h4>
            <h1 style="font-size: 5rem; color:blue;">Comments</h1>
            <!-- Add -->
            <div style="width: 80%; overflow-y: scroll; height: 45vh;">
                <?php
                    $x1=$_GET['x'];
                    $con=mysqli_connect("localhost","root","pranay123","kmitregis");
                    $qu="select * from comments where postid like '$x1' order by id desc";
                    $res=mysqli_query($con,$qu);
                    $c=mysqli_num_rows($res);
                    if($c==0){
                   	     ?><h1>No Comments</h1><?php
                   }
                    else{
                        while($row=mysqli_fetch_row($res)){
                            $u=$row[2]; $n=$row[3];$d=$row[4];$m=$row[5];
                            $q1="select userimg from regisinfo where username like '$u'";
                            $r1=mysqli_query($con,$q1);
                            $r1=mysqli_fetch_row($r1);
                            $loc="userimg/".$r1[0];
                            echo "<div style='margin-bottom:2rem; color:black; border:4px solid grey; text-align:left; padding:4px; background:rgb(240,255,255,0.9);'><img style='border-radius:50%;' src=$loc width='35px' height='35px'><b>$n</b>"."[$u]".":&nbsp&nbsp$m&nbsp<p style='margin:0px; color:lightgrey;' align='right'>$d</p></div>";
                        }
                    }
                ?>
            </div>
                <div class="post" style="margin-top:5rem;">
                    <form action="comment.php" method="POST">
                        <input id="post-id-inp" type="text" name="post-id" hidden>
                        <textarea style='background: rgb(152,251,152,0.
                        8);' class="text" name="comment" rows="2" placeholder="Comment..." required></textarea> <br>
                        <button  class="send" onclick="send(<?php echo $_GET["x"];?>)" type="submit">Send</button>
                    </form>
                </div>
        </div>
    </div>


    <div>
    	<h3 style=" float:left; margin-left: 15%; width:50%; font-size: 30px; color:blue;">Feed</h3>
    	<h2 style="margin:1rem; float:right;"><a href="#add" onclick="showadd('add')">Add&nbsp;</a><img style="height: 60px; width:50px; " src="icons/add.png"></h2>
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

    				$id=$row[0];$u=$row[1];$n=$row[2];$d=$row[3];$m=$row[4];$img='post/'.$row[5];
                    $q1="select userimg from regisinfo where username like '$u'";
                    $r1=mysqli_query($con,$q1);
                    $r1=mysqli_fetch_row($r1);
    				$loc="userimg/".$r1[0];
    				echo "<div class='msg'><img class='dp' src=$loc width='35px' height='30rem'><b>$n</b>"."[$u]".":"."
						<div style='text-align: center; overflow-y:scroll;'><div><img src=$img style='height:25rem; width:15rem;'></div>
						&nbsp&nbsp$m&nbsp<p style='margin:0px; color:lightgrey;' align='right'>$d</p></div><i style='color:red;' class='fa fa-comments' aria-hidden='true'></i><a  style='text-decoration:none; color:blue;'  onclick=showadd('comments',$id) href='#comments'>Comments</a></div><br>";
    			}
    		}
    	?>
    </div>
    <script type="text/javascript">
        function send(v){
            document.getElementById("post-id-inp").value=v;
        }
    </script>
</body>
</html>

