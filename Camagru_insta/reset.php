<?php
require ('./server.php'); // Should new_passwd.php come here? Not for now atleast.
if (isset($_GET['vcode']))
{
	try
	{
		$query = 'SELECT * FROM `users` WHERE verification = ?';
		$stmt = $conn->prepare($query);
		$stmt->execute([$_GET['vcode']]);
		$res = $stmt->fetch(PDO::FETCH_ASSOC);
		if ($res)
		{
			unset($stmt);
			$_SESSION['verification'] = $res['verification'];
			unset($res);
			header('location: new_password.php');
		}
		else
		{
			header('location: register.php');
		}

	}
	catch (PDOException $e)
	{
		echo $e->getMessage();
	}
}