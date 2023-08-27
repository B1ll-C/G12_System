<?php
	include('server.php');
	

	$reserve 		= "show tables WHERE Tables_in_accounts LIKE '%_r'";
	$reserve_result = mysqli_query($db, $reserve);
	$day_r	= mysqli_num_rows($reserve_result);
	//day1
	if (mysqli_num_rows($reserve_result) > 0) {
		while ($reserve_row = mysqli_fetch_array($reserve_result)) {
			$rrr 		= $reserve_row[0];
			$lr 		= "SELECT Dtime FROM $rrr WHERE Dtime LIKE '%$d%' ";
			$lr_result 	= mysqli_query($db, $lr);
			if (mysqli_num_rows($lr_result) > 0) {
				while ($lr_row = mysqli_fetch_array($lr_result)) {
					$acc_result = substr($reserve_row[0],0,strlen($reserve_row[0]) -2);

	
?>	
						<li><button style="background-color: #C67D01;" value="<?php echo $reserve_row[0]?>" name="reserve_day1"><?php echo $acc_result;?></button></li>


<?php
				}
			}
		}
	}
?>

