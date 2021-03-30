    <?php
    session_start();    
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Sign Up</title>
        <link rel="stylesheet" href="registrationStyle.css">
    </head>
    <body>
        <div class="header">
            <div class="hlink">
                <a href="#" style="color: rgb(255, 255, 255); text-decoration: none;"><h1>KONNECT</h1></a>
            </div>
        </div>
        <center><h1 style="font-family:verdana;color: #0066cc"> Sign Up</h1></center>
        <div class="signuppage">
            <div class="col">
            <form class="signform" action="registrationform.php" method="post" enctype="multipart/form-data">
                <label  class="label" for="FirstName">Firstname: *</label><br>    
                <input class="textbox"  name="firstname" type="text" name="FirstName" id="firstname" placeholder="First Name" required><br><br>
                <label  class="label" for="LastName" >Lastname: </label><br>
                <input class="textbox" name="lastname" type="text" name="LastName" id="lastname" placeholder="Last Name"><br><br>
                <label  class="label" name="username" for="UserName" >Username: *</label><br>
                <input class="textbox" type="text" name="username" id="username" placeholder="User Name" required><br><br>
                <label class="label" for="year" >Select Year: *</label>
                <select class="dropdown" name="year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <br><br>
                <label class="label" for="dept">Select Dept: *</label>  
                <select class="dropdown" name="dept">
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EIE">EIE</option>
                    <option value="IT">IT</option>
                </select>
                <br><br>
                <label class="label" for="section" >Select Section: *</label>  
                <select class="dropdown" name="section">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                    <option value="G1">G1</option>
                    <option value="G2">G2</option>
                </select> <br><br>
                <label class="label" for="contact" >Contact No: *</label><br>
                <input class="textbox" type="text" name="phno" id="contactno" placeholder="Contact No" required><br><br>
                <label class="label" for="email" >Email: *</label><br>
                <input class="textbox" type="email" name="email" id="email" placeholder="abc@gmail.com" required><br><br>
                <label class="label" for="pass" >Password: *</label><br>
                <input class="textbox" name="password" type="password" id="passcode" placeholder="password" required><br><br>
                <label for="img">Select Profile Pic:</label><br>
                <input type="file" id="img" name="userimg">
                <br><br>
                <input id="createaccount" name="submit" type="submit" value="Create Account">
            </form>
        </div>
        </div>
    </body>
</html>