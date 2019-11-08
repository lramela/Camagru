<?php
require_once ('server.php'); 
require ('./valid_session_check.php');

?>
<h1>Profile settings for <?= $_SESSION['username']?></h1>
<span>Email notifications are <?= $_SESSION['notify']?></span>
<?php
	if ($_SESSION['notify'] == "on")
		require './srcs/turn_notif_off.html';
	else if ($_SESSION['notify'] == "off")
		require './srcs/turn_notif_on.html';
?>
<br>
<span><a href="./updateProfile.php">Update profile</span><br></a>

