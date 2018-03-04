<?php

if (isset($_POST['submit']))
{
	include_once 'dbase.inc.php';
	
	$first 	= mysqli_real_escape_string($conn, $_POST['first']);
	$last 	= mysqli_real_escape_string($conn, $_POST['last']);
	$email 	= mysqli_real_escape_string($conn, $_POST['email']);
	$uid 	= mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd 	= mysqli_real_escape_string($conn, $_POST['pwd']);
	
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
	{
		header("Location: ../index.php?signup=empty");
		exit();
	}
	else
	{
		// Check if input characters are valid.
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last))
		{
			header("Location: ../index.php?signup=invalid");
			exit();				
		}
		else
		{
			// Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../index.php?signup=email&first=$first&last=$last&uid=$uid");
				exit();
			}
			else
			{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				
				$result = mysqli_query($conn, $sql);
				$sqlCheck = mysqli_num_rows($sql);
				
				if ($sqlCheck > 0)
				{
					header("Location: ../index.php?signup=exist&first=$first&last=$last");
					exit();
				}
				else
				{
//				header("Location: ../index.php?signup=success");
//				exit();
				}
			}
		}
	}
}
else
{
	header("Location: ../index.php");
	exit();
}