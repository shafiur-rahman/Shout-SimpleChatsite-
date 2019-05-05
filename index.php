<?php include 'database.php' ; ?>

<?php
	
	$query = "SELECT * FROM shouts ORDER BY time DESC";
	$shouts = mysqli_query($con ,$query);

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		SHout it
	</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id ="container">
	<header>
		<h1>Shout it!shout box</h1>
	</header>
	<div id="shouts">
		<u1>
		<?php while($row = mysqli_fetch_assoc($shouts)) :?>
		
			<li class="shouts"><span><?php echo $row['time']?>- </span><strong><?php echo $row['user']?></strong>:<?php echo $row['message']?> </li>
			
			<?php endwhile; ?>

		<u1/>
	</div>
	<div id="input">
	
		<?php if(isset($_GET['error'])) :?>
			<div class='error'><?php echo $_GET['error']; ?></div>
		<?php endif;?>
		<form method="post" action="process.php">
			<input type="text" name="user" placeholder="Enter your name"/>
			<input type="text" name="message" placeholder="Enter your message"/>
			<br/>
			<input class="shout-btn" type="submit" name="submit" value="Shout it out">
			
		</form>
	</div>
</div>
</body>
</html>
