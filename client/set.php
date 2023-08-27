<?php
	
	include('info.php');

	$resto 	= mysqli_connect('localhost','thesis','cdlbthesisict','restaurant');

	$user 	= $_SESSION['username'];
	$email 	= $_SESSION['email'];

	$oldPassword 	= '';
	$newPass_1  	= '';
	$newPass_2 		= '';

	$errors 		= array();

	if (isset($_POST['change'])) {

		$oldPassword 	= mysqli_real_escape_string($db, $_POST['password']);
		$newPass_1 		= mysqli_real_escape_string($db, $_POST['password_1']);
		$newPass_2 		= mysqli_real_escape_string($db, $_POST['password_2']);

		$hash 			= md5($oldPassword);
		$password 		= md5($newPass_1);


	
		$match  	= "SELECT * FROM accounts WHERE username='$user'  LIMIT 1";
		$result 	= mysqli_query($db, $match);
		$pass  		= mysqli_fetch_assoc($result);

		if($hash != $pass['password']){array_push($errors, "Your Old Password Doesn't Match");}
		if(empty($oldPassword)){array_push($errors, 'Password is empty');}
		if(strlen($newPass_1) < 6){array_push($errors, 'Password Must Have Atleast 6 Characters');}
		if($newPass_1 != $newPass_2){array_push($errors, "Your New Password Doesn't Match");}


		if (count($errors) == 0) {
			$query 	= "INSERT INTO user_history(email, changed, password) VALUES('$user', '$hash', '$password')";
			mysqli_query($resto, $query);
			$query 	= "UPDATE accounts SET password='$password' WHERE username='$user'";
			mysqli_query($db, $query);


			header('Location: logout.php');

		}


	}

?>