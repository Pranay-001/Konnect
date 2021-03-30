<?php 
	session_start();
	$con=mysqli_connect("localhost","root","pranay123","kmitregis");
	$msg=str_replace("'", "\'", $_POST['msg']);
	$u=$_SESSION['username'];
	$n=$_SESSION['fname']." ".$_SESSION['lname'];
	$str=explode(".", $_FILES["file"]["name"]);
	$img=uniqid().".".$str[sizeof($str)-1];
	$art=str_replace("'", "\'", $_POST['article']);
	$sql="Insert into forum(username,name,msg,post,article) values('$u','$n','$msg','$img','$art')";
	$res=mysqli_query($con,$sql);
	if(!$res){
		echo "ERROR________________________|||||||||   :(";
	}
	else{
		$target="post/".$img;
	    if(!move_uploaded_file($_FILES['file']['tmp_name'],$target)){
	    		echo "Problem in uploading";
		}
		// print_r($art);
		else		header("Location:home.php");
	}
?>