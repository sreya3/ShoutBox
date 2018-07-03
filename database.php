<?php
	$con = mysqli_connect("localhost", "root", "pass123", "shoutit");
	
	//Test connection
	if(mysqli_connect_errno()){
		echo "Failed to connect!: ".mysqli_connect_error();
	}
?>