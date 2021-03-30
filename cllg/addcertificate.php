<?php
	session_start();
	$con=mysqli_connect("localhost","root","pranay123","kmitregis");
	$filename=$_FILES['certificate']['name'];
	$tempname=$_FILES['certificate']['tmp_name'];
	$d="certificate/";
	$u=$_SESSION['username'];
	$des=$_POST['des'];
	$sql="insert into achievements values ('$u','$filename','$des')";
	if(!mysqli_query($con,$sql)){
		echo "<script type='text/javascript'>
			alert('Error');
		</script>";
	}
	else{
		move_uploaded_file($tempname,$d.$filename);
		header("Location:achievements.php");
	}
?>