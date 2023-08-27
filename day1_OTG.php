<?php
include('server.php');
	
	$dp_acc 	= "show tables WHERE Tables_in_accounts LIKE '%_dp'";
	$dp_result 	= mysqli_query($db, $dp_acc);

	if (mysqli_num_rows($dp_result) > 0) {
		while ($dp_row = mysqli_fetch_array($dp_result)) {
			$dp_user 	= $dp_row[0];
			$dp_prod 	= "SELECT * FROM $dp_row[0] WHERE created LIKE '%$d_dp%' LIMIT 1";
			$dp_prod_result = mysqli_query($db, $dp_prod);

			if (mysqli_num_rows($dp_prod_result) > 0) {
				while ($dp_prod_row = mysqli_fetch_array($dp_prod_result)) {
					$dp_prod_row_res = substr($dp_row[0],0,strlen($dp_row[0]) -3);
?>
					<li><button style="background-color: #C67D01;" value="<?php echo $dp_row[0]?>" name="dp"><?php echo $dp_prod_row_res;?></button></li>
<?php
				}
			}
		}
	}
?>