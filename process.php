<?php
	include 'database.php';
	
	if(isset($_POST['submit'])){
		$user = mysqli_real_escape_string($con, $_POST['user']);
		$message = mysqli_real_escape_string($con, $_POST['msg']);
		
		//set timezone
		date_default_timezone_set('America/Los_Angeles');
		$time = date('h:i:s a', time());
		if(!isset($user) || $user == '' || !isset($message) || $message == ''){
			$error = "Please fill in name and message.";
			header("Location: index.php?err=".urlencode($error));
			exit();
		}else{
			$query = "INSERT INTO shouts (user, message, time)
					   VALUES ('$user', '$message', '$time')";
		}
		if(!mysqli_query($con, $query)){
			die('Error'.mysqli_error($con));
		}else{
			header("Location: index.php");
			exit();
		}
	}
?>