<?php 
include('info.php');

$username 		= $_SESSION['username'];

$connect  		= mysqli_connect("localhost", "thesis", "cdlbthesisict", "food");//menu

$id 			= '';
$hidden_name 	= '';
$hidden_price 	= '';
$quantity 		= '';
$error 			= array();

 
if(isset($_POST["add_to_cart"]))
{	
	


	// $id 				= mysqli_real_escape_string($acc,$_POST['id']);
	$id = ''; 
	if( isset( $_GET['id'])) {
	  $id = $_GET['id']; 
	} 


	$hidden_name 		= mysqli_real_escape_string($acc, $_POST['hidden_name']);
	$hidden_price 		= mysqli_real_escape_string($acc, $_POST['hidden_price']);
	$quantity 			= mysqli_real_escape_string($acc, $_POST['quantity']);
	$total 				= $quantity * $hidden_price;

	$user_check_query = "SELECT * FROM $username$C WHERE item_name='$hidden_name' LIMIT 1";
 	 $result = mysqli_query($acc, $user_check_query);
  	$user = mysqli_fetch_assoc($result);
  	// $q 	= $user['quantity'];

  
  if ($user) { // if user exists
    if ($user['item_name'] === $hidden_name) {
      array_push($error, "Err");

      $query_cart1 					=  "UPDATE $username$C SET quantity =$quantity+$q WHERE item_name LIKE '%$hidden_name%'";
      mysqli_query($acc, $query_cart1);

    }
}


	if (count($error) == 0) {
			$query_cart				= "INSERT INTO $username$C (id, item_name, quantity, price, total) VALUES('$id','$hidden_name','$quantity','$hidden_price','$total')";
			mysqli_query($acc, $query_cart); 
		
		}	
			// header("Location: index.php?#take-out");	

	}

if (isset($_POST['apply'])) {
	if (!empty($_POST['radio'])) {
		foreach ($_POST['radio'] as $checked) {
			if ($checked == $checked) {
				$xy = mysqli_real_escape_string($acc, $_POST[$checked]);
				$yx = "UPDATE $username$C SET quantity=$xy WHERE id=$checked";
				mysqli_query($acc, $yx);

		

			}
		}
	}
	header("Location: index.php");
}


if(isset($_POST['remove'])){
if(!empty($_POST['check'])){

foreach($_POST['check'] as $selected){
$query2 	= "DELETE FROM $username$C WHERE item_name='$selected'";	
mysqli_query($acc, $query2);

}

if (!empty($_POST['truncate'])) {
	$query3 	= "truncate table $username$C";
	mysqli_query($acc, $query3);
	header('Location: index.php');
}
}

}



?>