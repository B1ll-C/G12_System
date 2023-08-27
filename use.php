
<?php
	include('server.php');

	$user 			= "SELECT username FROM accounts ORDER BY username ASC";
	$user_result 	= mysqli_query($user_db, $user);

	if (mysqli_num_rows($user_result) > 0) {

		while ($user_row = mysqli_fetch_array($user_result) ) {
			echo '<li><button name="user" value="'.$user_row[0].'">'.$user_row[0].'</button></li>';
		}
		
	}

		
?>
