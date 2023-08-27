<?php
session_start();
include('buy.php');

$C        = '_cart';
$D_P       = '_dp';
$R        = '_r';

$username 	= $_SESSION['username'];
$email		= "";
$fname		= "";
$lname		= "";
$person		= "";
$time		= "";
$msg 		= "";
$cont 		= "";
$errors		= array();

$db			= mysqli_connect("localhost","thesis","cdlbthesisict","restaurant");
$db1 		= mysqli_connect('localhost','thesis','cdlbthesisict','accounts');

if (isset($_POST['booked'])) {
	$email	= mysqli_real_escape_string($db,$_POST['email']);
	$fname	= mysqli_real_escape_string($db, $_POST['fname']);
	$lname	= mysqli_real_escape_string($db, $_POST['lname']);
	$person	= mysqli_real_escape_string($db, $_POST['person']);
	$month	= mysqli_real_escape_string($db, $_POST['month']);
	$day 	= mysqli_real_escape_string($db, $_POST['day']);
	$time	= mysqli_real_escape_string($db, $_POST['time']);
	
	$Dtime	= date('Y')."/$month/$day/$time";
	$msg 	= mysqli_real_escape_string($db, $_POST['msg']);


	if (empty($email)) {array_push($errors, 'Email is required');}
	if (empty($fname)) {array_push($errors, 'First Name is required');}
	if (empty($lname)) {array_push($errors, 'Last &nbsp Name is required');}
	if (empty($person)) {array_push($errors, 'Number of Guest  is required');}
	if (($day == "00") || ($month == "00")) {array_push($errors, 'Please Insert The Date of reservation');}
	if (empty($time)) {array_push($errors, 'Please Insert The Time of Reservation');}

	if (count($errors) == 0) {
		$query	= "INSERT INTO reservation(email, fname, lname, person, Dtime, msg) VALUES('$email', '$fname', '$lname', '$person', '$Dtime', '$msg')";
		mysqli_query($db, $query);
		$query1	= "INSERT INTO $username$R(head, Dtime, msg) VALUES('$person', '$Dtime', '$msg')";
		mysqli_query($db1, $query1);
		header("Location: index.php");



	}


} if (isset($_POST['purchase'])) {

	$email		= mysqli_real_escape_string($db,$_POST['email']);
	$fname		= mysqli_real_escape_string($db, $_POST['fname']);
	$lname		= mysqli_real_escape_string($db, $_POST['lname']);
	$cont 		= mysqli_real_escape_string($db, $_POST['cont']);
	$DP 		= mysqli_real_escape_string($db, $_POST['DP']);
	$time 		= mysqli_real_escape_string($db, $_POST['time']);
	$price 		= mysqli_real_escape_string($db, $_POST['price']);
	$quantity 	= mysqli_real_escape_string($db, $_POST['quan']);

	$province 	= mysqli_real_escape_string($db, $_POST['province']);
	$city 		= mysqli_real_escape_string($db, $_POST['city']);
	$brgy 		= mysqli_real_escape_string($db, $_POST['brgy']);

	$address  	= "$province / $city / $brgy";

	if (empty($email)) {array_push($errors, 'Email required');}
	if (empty($fname)) {array_push($errors, 'First Name is required');}
	if (empty($lname)) {array_push($errors, 'Last &nbsp Name is required');}
	if (empty($cont)) {array_push($errors, 'Contact Number is required');}
	if ($brgy === "00") {array_push($errors, 'Enter your address');}

	if (count($errors) == 0) {


	if(!empty($_POST['check'])){

		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['check'] as $selected){
		$backup 	= "INSERT INTO purchase(email, product, price, quantity, DP, Dtime, address, cont) VALUES ('$email', '$selected', '$price', '$quantity', '$DP', '$time',
		'$address', '$cont')";
		$purchase 	= "INSERT INTO $username$D_P(product,price, quantity, DP,Dtime,address,cont) VALUES('$selected','$price', '$quantity','$DP','$time','$address','$cont')";	
		mysqli_query($acc, $purchase);
		mysqli_query($db, $backup);
		$query2	 	= "DELETE FROM $username$C WHERE item_name='$selected'";	
		mysqli_query($acc, $query2);




	}

}

		header("Location: index.php");

	}
}





?>
