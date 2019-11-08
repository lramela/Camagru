
<?php

require_once ('./server.php');
?>

<h3>Update your Details</h3>
<form action="updateProfile.php" method="POST">
    <span>Username:</span><input type="text" placeholder="username" name="username"/><br />
    <input type="submit" name="submit-uid" value="Update" /><br><br>
    <span>Email:</span><input type="text" placeholder="email" name="email"/><br />
    <input type="submit" name="submit-email" value="Update" /><br><br>
    <span>Old Password:</span><input type="text" placeholder="Old Password" name="old-pwd"/><br />
    <span>New Password:</span><input type="text" placeholder="New Password" name="new-pwd"/><br />
    <span>Confirm Password:</span><input type="text" placeholder="Confirm Password" name="repeat-pwd"/><br />
    <input type="submit" name="submit-pwd" value="Update" />
</form>

