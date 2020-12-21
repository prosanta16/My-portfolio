<?php

 $db = mysqli_connect('localhost', 'root', '', 'portfolio');
 
 if(isset($_POST['submit']))
	{
		$submitable = true;
		$name = $_POST['name'];
		$email = $_POST['email'];
		$sub = $_POST['subject'];
		$msg = $_POST['message'];
		
		if(strlen($name)<1 || strlen($email)<1 || strlen($sub<1) || strlen($msg)<1){
			$submitable = false;
		}
		
		if($submitable){
			$sql = "INSERT INTO contact (name, email, subject,message)
			VALUES ('$name','$email', '$sub', '$msg')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}else {
			echo "Filed Required";
		}

	}
?>