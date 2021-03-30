<?php 
	session_start();	
	if(isset($_POST["submit"])){
		$con=mysqli_connect("localhost","root","pranay123","kmitregis");
		$n=$_POST['firstname'];
		$l=$_POST['lastname'];
		if($l==""){
			$l="kmit";
		}	
		$u=$_POST['username'];
		$y=$_POST['year'];
		$d=$_POST['dept'];
		$s=$_POST['section'];
		$p=$_POST['phno'];
		$e=$_POST['email'];
		$pass=$_POST['password'];
		if($_FILES['userimg']['size']!=0){
			$filename=$u.".jpg";
			$filetmpname=$_FILES['userimg']['tmp_name'];
			$folder='userimg/';
			move_uploaded_file($filetmpname, $folder.$filename);
		}
		else{
			$filename="dp.jpg";
		}
		print_r($filename);
		$qu="Insert into regisinfo values('$n','$l','$u',$y,'$d','$s',$p,'$e','$pass','$filename')";
		$res=mysqli_query($con,$qu);
		if($res){
			header('location:login.php');
		}
		else{
			echo "ERROR ----------RETRY>>>>>>";
		}
	}
?>
