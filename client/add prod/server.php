<?php
	session_start();

	//chicken
	$c 		= '';
	$ctype 	= '';
	$cprice = '';

	//pork
	$p 		= '';
	$ptype 	= '';
	$pprice = '';

	//fish
	$f 		= '';
	$ftype 	= '';
	$fprice = '';

	//soup
	$s 		= '';
	$stype 	= '';
	$sprice = '';

	//bevereges
	$b 	 	= '';
	$btype 	= '';
	$bprice = '';

	//combo
	$cb 	= '';
	$cbtype	= '';
	$cbprice= '';

	$errors = array();

	$db 	= mysqli_connect('localhost','root','','food');

	// chick
	if (isset($_POST['chick'])) {
		$c 		= mysqli_real_escape_string($db, $_POST['c']);
		$ctype 	= mysqli_real_escape_string($db, $_POST['ctype']);
		$cprice = mysqli_real_escape_string($db, $_POST['cprice']);

		if (empty($cprice)) {array_push($errors, 'Please Insert Price');}

		if (count($errors) == 0) {
			$query 	="INSERT INTO chicken(id,type,price) VALUES('$c','$ctype','$cprice')";
			mysqli_query($db, $query);
		}
	}

	elseif (isset($_POST['pork'])) {
		$p 		= mysqli_real_escape_string($db, $_POST['p']);
		$ptype 	= mysqli_real_escape_string($db, $_POST['ptype']);
		$pprice = mysqli_real_escape_string($db, $_POST['pprice']);

		if (empty($pprice)) {array_push($errors, 'Please Insert Price');}

		if (count($errors) == 0) {
			$query 	="INSERT INTO pork(id,type,price) VALUES('$p','$ptype','$pprice')";
			mysqli_query($db, $query);
		}
	}

	elseif (isset($_POST['fish'])) {
		$f 		= mysqli_real_escape_string($db, $_POST['f']);
		$ftype 	= mysqli_real_escape_string($db, $_POST['ftype']);
		$fprice = mysqli_real_escape_string($db, $_POST['fprice']);

		if (empty($fprice)) {array_push($errors, 'Please Insert Price');}

		if (count($errors) == 0) {
			$query 	="INSERT INTO fish(id,type,price) VALUES('$f','$ftype','$fprice')";
			mysqli_query($db, $query);
		}
	}

	elseif (isset($_POST['soup'])) {
		$s 		= mysqli_real_escape_string($db, $_POST['s']);
		$stype 	= mysqli_real_escape_string($db, $_POST['stype']);
		$sprice = mysqli_real_escape_string($db, $_POST['sprice']);

		if (empty($sprice)) {array_push($errors, 'Please Insert Price');}

		if (count($errors) == 0) {
			$query 	="INSERT INTO soup(id,type,price) VALUES('$s','$stype','$sprice')";
			mysqli_query($db, $query);
		}
	}

	elseif (isset($_POST['bev'])) {
		$b 		= mysqli_real_escape_string($db, $_POST['b']);
		$btype 	= mysqli_real_escape_string($db, $_POST['btype']);
		$bprice = mysqli_real_escape_string($db, $_POST['bprice']);

		if (empty($bprice)) {array_push($errors, 'Please Insert Price');}

		if (count($errors) == 0) {
			$query 	="INSERT INTO bev(id,type,price) VALUES('$b','$btype','$bprice')";
			mysqli_query($db, $query);
		}
	}

	elseif (isset($_POST['bundle'])) {
		$cb 		= mysqli_real_escape_string($db, $_POST['cb']);
		$cbtype 	= mysqli_real_escape_string($db, $_POST['cbtype']);
		$cbprice = mysqli_real_escape_string($db, $_POST['cbprice']);

		if (empty($cbprice)) {array_push($errors, 'Please Insert Price');}

		if (count($errors) == 0) {
			$query 	="INSERT INTO combo(id,type,price) VALUES('$cb','$cbtype','$cbprice')";
			mysqli_query($db, $query);
		}
	}

?>