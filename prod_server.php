<?php
	 $db = mysqli_connect('localhost','thesis','cdlbthesisict','food');

		$array3 = array('bev','chicken','combo','fish','pork','soup');


	 if (isset($_POST['update'])) {
	 	$x = $_POST['update'];

	 	$type = mysqli_real_escape_string($db, $_POST['type']);
	 	$price = mysqli_real_escape_string($db, $_POST['price']);
	 	$img = mysqli_real_escape_string($db, $_POST['img']);

		$array = array($type, $price, $img);	
		$array2 = array('type', 'price', 'img');
		$y = 0;

		foreach ($array3 as $arr3) {
			foreach ($array2 as $arr2) {
				// echo $arr3." ".$arr2." ".$array[$y]."<br>";
				$query = "UPDATE $arr3 SET $arr2='$array[$y]' WHERE id='$x'";
				mysqli_query($db, $query);
				$y++;
				if ($y == 3) {$y=-0;}
			}
		}
	 }

	 if (isset($_POST['delete'])) {
	 	$x = $_POST['delete'];
	 	foreach ($array3 as $arr) {
	 		$query = "DELETE FROM $arr WHERE id='$x'";
	 		mysqli_query($db, $query);
	 	}
	 }

	 if (isset($_POST['add'])) {
	 	$table = mysqli_real_escape_string($db, $_POST['table']);
	 	$id = mysqli_real_escape_string($db, $_POST['id']);
	 	$type = mysqli_real_escape_string($db, $_POST['type']);
	 	$price = mysqli_real_escape_string($db, $_POST['price']);
	 	$img = mysqli_real_escape_string($db, $_POST['img']);

	 	$query = "INSERT INTO $table(id,type,price,img) VALUES('$id','$type','$price','$img')";
	 	mysqli_query($db, $query);
	 }


?>