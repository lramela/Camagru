<?php 
   // include('functions.php');
	//include('app_logic.php');
	include('database.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form class="register-form" action="register.php" method="post">
	<h2 class="form-title">Register</h2>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" value="">
	</div>
	<div class="form-group">
	E-mail: <input type="text" name="email">
	<//span class="error">*
	<?//php echo $emailErr;?></span>
	</div>
	<div class="form-group">
		Password: <input type="text" name"password_1">
		<//span class="error">*
	</div>
	<div class="form-group">
		Confirm	Password: <input type="text" name"password_2">
		<//span class="error">*
	</div>
	<div class="form-group">
		<button type="submit" name="register_btn" class="register-btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>