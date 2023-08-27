<?php
	session_start();

	$db 		= mysqli_connect('localhost','root','','restaurant');

	$jan 		= "SELECT * FROM reservation WHERE Dtime LIKE 'jan%'";
	$janr  		= mysqli_query($db ,$jan);
	$janr1  	= mysqli_num_rows($janr);

	$feb 		= "SELECT * FROM reservation WHERE Dtime LIKE 'feb%'";
	$febr 		= mysqli_query($db, $feb);
	$febr1 		= mysqli_num_rows($febr);

	$mar		= "SELECT * FROM reservation WHERE Dtime LIKE 'mar%'";
	$marr 		= mysqli_query($db, $mar);
	$marr1 		= mysqli_num_rows($marr);

	$apr 		= "SELECT * FROM reservation WHERE Dtime LIKE 'apr%'";
	$aprr 		= mysqli_query($db, $apr);
	$aprr1 		= mysqli_num_rows($aprr);

	$may 		= "SELECT * FROM reservation WHERE Dtime LIKE 'may%'";
	$mayr 		= mysqli_query($db, $may);
	$mayr1 		= mysqli_num_rows($mayr);

	$jun 		= "SELECT * FROM reservation WHERE Dtime LIKE 'jun%'";
	$junr 		= mysqli_query($db, $jun);
	$junr1 		= mysqli_num_rows($junr);

	$jul 		= "SELECT * FROM reservation WHERE Dtime LIKE 'jul%'";
	$julr 		= mysqli_query($db, $jul);
	$julr1 		= mysqli_num_rows($julr);

	$aug 		= "SELECT * FROM reservation WHERE Dtime LIKE 'aug%'";
	$augr 		= mysqli_query($db, $aug);
	$augr1 		= mysqli_num_rows($augr);

	$sep 		= "SELECT * FROM reservation WHERE Dtime LIKE 'sep%'";
	$sepr 		= mysqli_query($db, $sep);
	$sepr1 		= mysqli_num_rows($sepr);

	$oct 		= "SELECT * FROM reservation WHERE Dtime LIKE 'oct%'";
	$octr 		= mysqli_query($db, $oct);
	$octr1 		= mysqli_num_rows($octr);

	$nov 		= "SELECT * FROM reservation WHERE Dtime LIKE 'nov%'";
	$novr 		= mysqli_query($db, $nov);
	$novr1 		= mysqli_num_rows($novr);

	$dec 		= "SELECT * FROM reservation WHERE Dtime LIKE 'dec%'";
	$decr 		= mysqli_query($db, $dec);
	$decr1 		= mysqli_num_rows($decr);

?>