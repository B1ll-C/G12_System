<?php
session_start();
$username = "";
$email    = "";
$fname    = "";
$lname    = "";
$cont     = "";        
$errors   = array(); 

$C        = '_cart';
$D_P       = '_dp';
$R        = '_r';

$db = mysqli_connect('localhost', 'thesis', 'cdlbthesisict', 'form');
$db1= mysqli_connect('localhost','thesis','cdlbthesisict','accounts');

if (isset($_POST['reg_user'])) {
  $username   = mysqli_real_escape_string($db, $_POST['username']);
  $email      = mysqli_real_escape_string($db, $_POST['email']);
  $fname      = mysqli_real_escape_string($db, $_POST['fname']);
  $lname      = mysqli_real_escape_string($db, $_POST['lname']);
  $cont       = mysqli_real_escape_string($db, $_POST['cont']); 
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($fname)) {array_push($errors, 'First Name is required');}
  if (empty($lname)) {array_push($errors, 'Last Name is required');}
  if (empty($cont)) {array_push($errors, 'Contact Number is required');}
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM accounts WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO accounts (username, email, password, fname, lname,cont,access) 
  			  VALUES('$username', '$email', '$password','$fname','$lname','$cont','granted')";
    $query1 = "CREATE TABLE $username$D_P(
                                          id int unsigned auto_increment not null,
                                          product varchar(100) not null,
                                          price   double(10, 2) not null,
                                          quantity int(2) not null,
                                          DP varchar(50) not null,
                                          Dtime varchar(30) not null,
                                          address varchar(100) not null,
                                          cont int(11) not null,
                                          created TIMESTAMP not NULL DEFAULT CURRENT_TIMESTAMP,
                                          primary key(id)
                                           )";

    $query2 = "CREATE TABLE $username$R(

                                         id int unsigned auto_increment not null,
                                         head int not null,
                                         Dtime varchar(30) not null,
                                         msg varchar(255) not null,
                                         created TIMESTAMP not NULL DEFAULT CURRENT_TIMESTAMP,
                                         primary key(id)

                                          )";

    $query3 = "CREATE TABLE $username$C(

                                         id int unsigned auto_increment not null,
                                         item_name varchar(50) not null,
                                         quantity int not null,
                                         price double(10,2) not null,
                                         total  double(10,2) not null,
                                         created TIMESTAMP not NULL DEFAULT CURRENT_TIMESTAMP,
                                         primary key(id)

                                          )";

  	mysqli_query($db, $query);
    mysqli_query($db1, $query1);
    mysqli_query($db1, $query2);
    mysqli_query($db1, $query3);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}
?>