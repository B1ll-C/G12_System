<?php
include('server.php');

	
	if (isset($_POST['delete'])) {

		$x 		= $_POST['delete'];

		$query	= "DELETE FROM accounts WHERE username='$x'";
		mysqli_query($user_db, $query);

		$query  = "show tables WHERE Tables_in_accounts LIKE '%$x%'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
				$drop 	= "Drop table $row[0]";
				mysqli_query($db, $drop);
			}
		}
		header('Refresh:1 url=account.php');
		
	}

	if (isset($_POST['update'])) {

		$x 		= $_POST['update'];


		$email 	= mysqli_real_escape_string($user_db, $_POST['email']);
		$password 	= mysqli_real_escape_string($user_db, $_POST['password']);
		$fname 	= mysqli_real_escape_string($user_db, $_POST['fname']);
		$lname 	= mysqli_real_escape_string($user_db, $_POST['lname']);
		$cont 	= mysqli_real_escape_string($user_db, $_POST['cont']);
		$access 	= mysqli_real_escape_string($user_db, $_POST['access']);

		$query 	= "UPDATE accounts set email='$email' WHERE username='$x'";
		mysqli_query($user_db, $query) 	;
		$query 	= "UPDATE accounts set password='$password' WHERE username='$x'";
		mysqli_query($user_db, $query) 	;
		$query 	= "UPDATE accounts set fname='$fname' WHERE username='$x'";
		mysqli_query($user_db, $query) 	;
		$query 	= "UPDATE accounts set lname='$lname' WHERE username='$x'";
		mysqli_query($user_db, $query) 	;
		$query 	= "UPDATE accounts set cont='$cont' WHERE username='$x'";
		mysqli_query($user_db, $query) 	;
		$query 	= "UPDATE accounts set access='$access' WHERE username='$x'";
		mysqli_query($user_db, $query) 	;
		header('Refresh:1 url=account.php');
		
	}

?>