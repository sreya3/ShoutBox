<?php include 'database.php';?>
<?php 
	//create select query
	$query = "SELECT * FROM shouts ORDER BY id DESC";
	$shouts = mysqli_query($con, $query);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SHOUT IT!</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
	<div id="container">
		<header>
			<h1> SHOUT IT! Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)):?>
					<li class ="shout"><span><?php echo $row['time'];?> - </span><b><?php echo $row['user'];?></b>: <?php echo $row['message'];?></li>
				<?php endwhile;?>
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['err'])):?>
				<div class="error"><?php echo $_GET['err'];?></div>
			<?php endif;?>
			<form method="post" action="process.php">
				<input type="text" name="user" placeholder="Enter your name"/>
				<input type="text" name="msg" placeholder="Enter your message"/>
				<br/>
				<input type="submit" name="submit" value="SHOUT IT OUT!" class="shout-btn"/>
			
			</form>
		</div>
	</div>
</body>
</html>