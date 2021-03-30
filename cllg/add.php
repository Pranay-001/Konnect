<?php 
	// session_start();
	// $image=$_FILES['file']['name'];
    $target="post/".basename($_FILES["file"]["name"]);

    if(!move_uploaded_file($_FILES['file']['tmp_name'],$target)){
    		echo "Problem in uploading";
	}
	print_r($_FILES["file"]);
	
?>