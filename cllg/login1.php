<?php
    session_start(); 
?>
<html>
    <head>
        <title>Konnect Login</title>
        <script src="konnect.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="E:/courseera/Bootstrap4/conFusion/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="E:/courseera/Bootstrap4/conFusion/node_modules/font-awesome/css/font-awesome.min.css">
       <link rel="stylesheet" href="E:/courseera/Bootstrap4/conFusion/node_modules/bootstrap-social/bootstrap-social.css">
       <link rel="stylesheet" href="E:/konnect/cssfiles/konnect.css">
        <style>
        .help{
            color: blue;
            float: right;
            top: 18px;
            padding: 2rem;
        }
        .img{
            background-color:transparent; 
        }
    </style>

    </head>
  <body>
        <div class="headerx">
            <div class="hlinkx">
                <img src="logo.gif">    
                <a class="help" href="">Help</a>
                <!-- <a href="#home"  style="color: rgb(255, 255, 255); text-decoration: none;">KONNECT</a>   -->          
            </div>
        </div>
        <div class="container" style="margin-top:-5rem;" >
        <div class="row h-100">
            <div class="col-md-6 my-auto justify-content-center">
                <h2><strong class="text-primary">KONNECT</strong></h2>
                <strong>make thing's easier
                in college life</strong>
            </div>
            <div class="col-md-4 my-auto pt-sm-2 justify-content-center" style="height:auto;width:auto;border:1px solid black;border-radius:10px">
                <h2 class="text-primary" style="text-align:center">Login</h2>
                <hr>
                    <form  action="logininfo.php" method="post">
                        <div class="form-group">
                            <label for="userid">Username</label>
                            <input type="text"  class="form-control" name="name" placeholder="Username" >
                        </div>
                        <div class="form-group">
                            <label for="passid">Password</label>
                            <input type="password"  class="form-control" name="password" id="pwd" placeholder="Password">
                        </div>
                        <button class="btn btn-primary" style="width:350px">Login</button>
                     </form>
                        <div class="form-group">
                            
                            <a href="forgotPass.php" alt="forgotpassword"><p style="text-align:center">forgot password?</p></a>
                            <hr>
                            <a role="button" class="btn btn-success text-white" data-toggle="modal" data-target="#loginmodal"style="width:350px">Sign Up</a>
                        </div>
               
        </div>
        </div>
    </div>
    <div id="loginmodal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="content">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h4 class="text-primary modal-title"> Create New Account</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="signuppage">
                <div class="col">
                <div class="modal-body">
                    <form class="signform" action="registrationform.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label  class="label" for="FirstName">Firstname: *</label><br>
                        <input class="form-control textbox" name="firstname" type="text" name="FirstName" id="firstname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label  class="label" for="LastName" >Lastname:</label><br>
                        <input class="form-control textbox" name="lastname" type="text" name="LastName" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label  class="label" name="username" for="UserName" >Username: *</label><br>
                        <input class="form-control textbox" type="text" name="username" id="username" placeholder="User Name" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="year" > Select Year: *</label>
                        <select class="form-control dropdown" name="year">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label" for="dept">Select Dept: *</label>  
                        <select class="form-control dropdown" name="dept">
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                            <option value="EIE">EIE</option>
                            <option value="IT">IT</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label" for="section" >Select Section: *</label>  
                        <select class="form-control dropdown" name="section">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G1">G1</option>
                            <option value="G2">G2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="label" for="contact" > Contact No: *</label><br>
                        <input class="form-control textbox" type="text" name="phno" id="contactno" placeholder="Contact No" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="email" >Email: *</label><br>
                       <input class="form-control textbox" type="email" name="email" id="email" placeholder="abc@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label class="label" for="pass" >Password: *</label><br>
                        <input class="form-control textbox" name="password" type="password" id="passcode" placeholder="password"  required >
                    </div>
                    <div class="form-group">
                    <label for="img">Select Profile Pic:</label><br>
                    <input type="file" id="img" name="userimg">
                    </div>
                    <div class="form-group offset-3">
                        <input class="btn btn-success" type="submit" name="submit" value="Create Account">
                    </div>
                    </form>
                </div>
                </div>
            </div>

            </div>

        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="E:/courseera/Bootstrap4/conFusion/node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="E:/courseera/Bootstrap4/conFusion/node_modules/popper.js/dist/umd/popper.min.js"></script>
       <script src="E:/courseera/Bootstrap4/conFusion/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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