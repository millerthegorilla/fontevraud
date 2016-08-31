<?php

if(!isset($_SESSION)) 
{ 
	session_start(); 
}

include_once('config.php');
include_once ('validate.php');
$error = ""; //Variable for storing our errors.
if(isset($_POST['SUBMIT']))
{ 
	if(empty($_POST['USERNAME']) || empty($_POST['PASSWORD']))
	{
		$error = "Both fields are required.";
	}
	else
	{
		// Define $username and $password
		$username=$_POST['USERNAME'];
		$password=$_POST['PASSWORD'];

		 
		//Check username and password from database
		
		$found = false;
		foreach($LOGIN_INFORMATION as $key=>$val) {
			if($key == $username)
			{
				if (validate($password, $val))
				{
					$found = true;
					break;
				}
			}
		}

		if($found)
		{
			$_SESSION['USERNAME'] = $username; // Initializing Session
			$time = $_SERVER['REQUEST_TIME'];
			$_SESSION['LAST_ACTIVITY'] = $time;
			$_SESSION['TIMEOUT_DURATION'] = $TIMEOUT_DURATION;
			header("Location: /"); // Redirecting To Other Page
			//header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
			//header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		}
		else
		{
			$error = "Incorrect username or password.";
		}
	}
}
?>
