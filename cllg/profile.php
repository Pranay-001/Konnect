<?php
    session_start();
    $con=mysqli_connect("localhost","root","pranay123","kmitregis");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Konnect-Profile</title>
        <link rel="stylesheet" href="profstyle.css">
        <meta charset="utf8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="konnect.css">
        <script src="https://kit.fontawesome.com/fa40053145.js" crossorigin="anonymous"></script>
        <style>
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
            <a class="active" style="font-family: cursive;" href="#">Profile</a>
            <a href="achievements.php">Acheivements</a>
            <a href="#academics">Academics</a>
            <a href="#placements">Placements</a>
            <a href="forumview.php">Forum</a>
            <a heref="#about" style="float: right;">About</a>
        </div> -->
        <div class="headerx">
            <div class="hlinkx">
                <a href="#home" style="font-size:15rem; color: rgb(255, 255, 255); text-decoration: none;"><h1>KONNECT</h1></a>
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
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-user-circle fa-lg"></span> Profile</a></li>
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
        <div class="prof_header">
            <h1 style="font-size: 3rem; font-weight: bold;">Profile</h1>
        </div>
        <div class="profcard">
            <img src="userimg/<?php echo $_SESSION['img']?>" class="prof_image">   
            <div class="prof_content1">Name:<pre style="display: inline;font-family: cursive; font-size: 20px;">&nbsp;               <?php print_r($_SESSION['fname']." ".$_SESSION['lname'])?></pre></div>
            <div class="prof_content1">Username:<pre style="display: inline;font-family: cursive; font-size: 20px;">           <?php print_r($_SESSION['username']);?></pre></div>
            <div class="prof_content1">Roll Number:<pre style="display: inline;font-family: cursive; font-size: 20px;">        <?php print_r($_SESSION['username']);?></pre></div>
            <div class="prof_content1">Email:<pre style="display: inline;font-family: cursive; font-size: 20px;">           <?php print_r($_SESSION['email']);?></pre></div>
            <div class="prof_content1">Contact:<pre style="display: inline;font-family: cursive; font-size: 20px;">&nbsp;               <?php print_r($_SESSION['phno']);?></pre></div>
            <div class="prof_content1" style="width:100px; margin-left: 65px; margin-right:20px; float:left;">Year:<pre style="display: inline;font-family: cursive; font-size: 20px;">  <?php print_r($_SESSION['year']);?></pre></div>
            <div class="prof_content1" style="width:130px; margin-left: 30px; margin-right:10px; float:left;">Dept:<pre style="display: inline;font-family: cursive; font-size: 20px;">  <?php print_r($_SESSION['dept']);?></pre></div>
            <div class="prof_content1" style="width:120px; margin-right: 65px; margin-left: 10px; float:right;">Section:<pre style="display: inline;font-family: cursive; font-size: 20px;">  <?php print_r($_SESSION['sec']);?></pre></div>
        </div>
    </body>
</html>
