<?php
require('db.php');
include('server.php');


if (isset($_POST['username'])){

 $username = stripslashes($_REQUEST['username']);
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `accounts` WHERE email='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
 $row  = mysqli_fetch_array($result);

        if($rows==1){
            if ($row['access'] == "granted") {
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] =$usernames;
            $_SESSION['password'] = $password;
            header("Location: index.php");
        } else {

            header("location: register.php?ban=".$row['access']);
                
        }

     
         } else{
            echo "<h1>Check your username or password</h1>";
            header('Refresh:1 url=index.php');}
    }
?>
