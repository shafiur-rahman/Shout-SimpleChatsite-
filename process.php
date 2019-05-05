<?php 
include 'database.php';

if(isset($_POST['submit']))
{
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	
	//set timezone
	
	//date_default_timezone_set_default_time('Asia/Dhaka');
	$time = date('h:i:s a',time());

	
	
	if (!isset($user) || $user == ''	|| !isset($message) || $message == '')
	{	
		
	$error = "Please fill in correctly";
	header("Location: index.php?error=".urldecode($error));
	exit();
	
	}else
	
		{ 
		$query = "INSERT INTO shouts(user,message,time) 
				  VALUES ('$user','$message','$time')";
		}
		if(!mysqli_query($con, $query))
		{
			die ('Error:'.mysqli_error($con));
		}
		else
		{
			header("Location : index.php");
			exit();
			
		}
}


