<?php
	date_default_timezone_set('Asia/Manila');
	$db 			= mysqli_connect('localhost','thesis','cdlbthesisict','accounts');
	$b_db	 		= mysqli_connect('localhost', 'thesis', 'cdlbthesisict', 'restaurant');
	$user_db	 	= mysqli_connect('localhost','thesis','cdlbthesisict','form');
	$date 			= date('F/d/Y');
	$date_1 			= date('F d, Y | h:iA', time());
	$next 			= date('F/d/Y',strtotime('+1 day'));
	$next_1			= date('F/d/Y', strtotime('+2 day'));
	$d 				= date('Y/m/d');
	$d_dp 			= date('Y-m-d');
	$d1				= date('Y/m/d', strtotime('+1 day'));
	$d2 			= date('Y/m/d', strtotime('+2 day'));
	



?>