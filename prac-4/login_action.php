<?php 
/* Set timezone to Brisbane */
date_default_timezone_set("Australia/Brisbane");
session_start();

/* Check Login form submitted */
if(isset($_POST["Submit"]))
{
	/* Define username and associated password array */
	$logins = array("admin" => "password");
	
	/* Check and assign submitted Username and Password */
	$Username = isset($_POST["username"]) ? $_POST["username"] : "";
	$Password = isset($_POST["password"]) ? $_POST["password"] : "";
	
	/* Check Username and Password existence in defined array */		
	if (isset($logins[$Username]) && $logins[$Username] == $Password)
	{
		/* Success: Set session variables and redirect to Homepage  */
		$_SESSION['username'] = $Username;
		
		header("Location: admin.php");
		
		// $log  = date("Y-m-d H:i") . " " . $Username . " Login" . PHP_EOL;
		
		// file_put_contents("../logs/log.txt", $log, FILE_APPEND);
	} else {
		/*Unsuccessful attempt: Set error message */
		$msg="<span style=\"color:red;\">Invalid Login Details!</span>";
			// $log  = date("Y-m-d H:i") . " " . $Username . " Failed to login" . PHP_EOL;
			// file_put_contents("../logs/log.txt", $log, FILE_APPEND);
	}
}
?>