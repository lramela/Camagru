<?php
if(!isset($_SESSION['user_id']) && !isset($_SESSION['username']) && !isset($_SESSION['notify']))
{
	header("location: register.php");
	exit(); // Does this even happen?
}
?>