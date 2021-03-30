<?php 
	session_start();
	$con=mysqli_connect("localhost","root","pranay123","kmitregis");
	$cmmt=$_POST['comment'];
	$u=$_SESSION['username'];
	$pid=$_POST["post-id"];
	$n=$_SESSION['fname']." ".$_SESSION['lname'];
	$sql="Insert into comments(postid,username,name,postcomment) values($pid,'$u','$n','$cmmt')";
	$res=mysqli_query($con,$sql);
	if(!$res){
		echo "ERROR________________________|||||||||   :(";
	}
	else{
		header("Location:homeComment.php?x="."".$pid);
	}
?>