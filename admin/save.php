<?php
session_start();

if (isset($_SESSION['USERNAME']))
{
	if (isset($_SESSION, $_SESSION['LAST_ACTIVITY'],$_SESSION['TIMEOUT_DURATION'])
      && ($_SERVER['REQUEST_TIME'] - $_SESSION['LAST_ACTIVITY']) > $_SESSION['TIMEOUT_DURATION'])
	{
		session_unset();    
		session_destroy();
		if(function_exists(requestLogin)) 
		{
			requestLogin();
		}
		else
		{
			exit;
		}
	}
	else
	{
		if(isset($_POST['PATH'],$_POST['TEXT']))
		{
			file_put_contents('../pages' . $_POST['PATH'],$_POST['TEXT']);
			header('Location: ' . $_POST['PATH'], true);
			header("Cache-Control: no-cache, must-revalidate");
			header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		}
	}
}

?>
