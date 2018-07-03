<?php
	$con = mysqli_connect("localhost", "root", "ayers2704", "shoutit");
	
	//Test connection
	if(mysqli_connect_errno()){
		echo "Failed to connect!: ".mysqli_connect_error();
	}
?>