<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);


//error handlers

			//check for empty fields
	if ( (empty($first)) || (empty($last)) || (empty($last)) || (empty($email)) || (empty($uid)) || (empty($pwd))) 
		{
			header("Location: ../signup.php?signup=empty");
		}
	
	else if(!preg_match("/^[a-zA-Z]*$/",$first) || !preg_match("/^[a-zA-Z]*$/",$last))
			//check if input charectors are valid
			{
				
				header("Location: ../signup.php?signup=invalid");
			}

	else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		 	{
				header("Location: ../signup.php?signup=email");
			}				
	else
		{
			$sql ="SELECT * FROM users WHERE user_uid='$uid'";
			$result = mysqli_query($conn,$sql);
			$resultCheck =mysqli_num_rows($result);

			if ($resultCheck >0) 
				{
					header("Location: ../signup.php?signup=usertaken");
				}
			else
				{
					//hashing the password
					$hashedPwd =password_hash($pwd,PASSWORD_DEFAULT);
					//insert the user into the database
					$sql ="INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd)VALUES ('$first','$last','$email','$uid','$hashedPwd');";
					mysqli_query($conn,$sql);
					header("Location: ../signup.php?signup=success");
			
			}	
		}

}
else{
	header("Location: ../signup.php?signup=check all fields");
}
