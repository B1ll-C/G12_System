<?php
	$db 		= mysqli_connect('localhost','thesis','cdlbthesisict','form');
	$username 	= $_SESSION['username'];
	$data 		= "SELECT * FROM accounts WHERE username ='$username'";
	$result 	= mysqli_query($db, $data);
	$view 		= mysqli_fetch_array($result);
	$loc 		= mysqli_connect('localhost','thesis','cdlbthesisict','location');
	$acc		= mysqli_connect('localhost','thesis','cdlbthesisict','accounts');

	$C        = '_cart';
$D_P       = '_dp';
$R        = '_r';
		

?>