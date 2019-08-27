<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);


	if ( (empty($email))  || (empty($pwd)) ) 
		{
			header("Location: ../index.php?error=empty");
		}
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		 	{
				header("Location: ../index.php?error=email");
			}
	else
	{
		$sql ="SELECT * FROM users WHERE user_email='$email' AND user_pwd='$pwd'";

			$result = mysqli_query($conn,$sql);
			$resultCheck =mysqli_num_rows($result);

			if ($resultCheck >0) 
				{
					header("Location: ../admin.php?welcome=user");
					
				}

	}
}
