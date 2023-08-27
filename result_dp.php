<?php
	include('server.php');
	//pickup

	if (isset($_GET['dp'])) {
		$x  	= $_GET['dp'];
		$query 	= "SELECT * FROM $x WHERE DP LIKE 'Pickup'";
		$result	= mysqli_query($db, $query);
		$int = 0;

		if (mysqli_num_rows($result) > 0) {	
			$y = mysqli_num_rows($result) + 1;
			$y++	
			
?>
			<form method="post" action="">
				<tr><th colspan="5"><?php echo $x; ?></th></tr>
					<tr>
						
<?php
			$total 	= 0;
			$q_total = 0;
			$a_total = 0;
			while ($row = mysqli_fetch_array($result)) {
				$total = $total + $row['price'];
		$q_total = $q_total + $row['quantity'];
		$a_total = ($row['price'] * $row['quantity']) + $a_total;
		$x_total = ($row['price'] * $row['quantity']);
				
				if ($int == 0) {	
					echo "<th rowspan='".$y++."''>".$row['DP']."<input type='checkbox' name='pickup[]' value='".$row['DP']."'></th>";
?>	
					<th>product</th>
					<th>price</th>
					<th>quantity</th>
					<th>total</th>
					
					
					</tr>
<?php
				}
				
				$int++;



?>				<tr>
					<td><?php echo $row['product'];?></td>
					<td><?php echo $row['price'];?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo number_format($x_total, 2); ?></td>
				</tr>
		
				
<?php
		
		
			}
?>
		<tr>
			<th>TOTAL:</th>
			<td><?php echo number_format($total, 2);  ?></td>
			<td><?php echo $q_total; ?></td>
			<td><?php echo number_format($a_total, 2); ?></td>
		</tr>
		<tr>
			<td colspan="5"><button style="background-color: #C67D01;" name="remove">Picked</button></td>
		</tr>
<?php

		}
	
?>

<?php	
//delivery
		$x  	= $_GET['dp'];
		$query 	= "SELECT * FROM $x WHERE DP LIKE 'Delivery'";
		$result	= mysqli_query($db, $query);
		$int = 0;

		if (mysqli_num_rows($result) > 0) {	
			$y = mysqli_num_rows($result) + 1;
			$y++	
			
?>
			<form method="post" action="">
				<tr><th colspan="5"><?php echo $x; ?></th></tr>
					<tr>
						
<?php
			$total 	= 0;
			$q_total = 0;
			$a_total = 0;
			while ($row = mysqli_fetch_array($result)) {
				$total = $total + $row['price'];
		$q_total = $q_total + $row['quantity'];
		$a_total = ($row['price'] * $row['quantity']) + $a_total;
		$x_total = ($row['price'] * $row['quantity']);
				
				if ($int == 0) {	
					echo "<th rowspan='".$y++."''>".$row['DP']."<input type='checkbox' name='delivery[]' value='".$row['DP']."'></th>";
?>	
					<th>product</th>
					<th>price</th>
					<th>quantity</th>
					<th>total</th>
					
					
					</tr>
<?php
				}
				
				$int++;



?>				<tr>
					<td><?php echo $row['product'];?></td>
					<td><?php echo $row['price'];?></td>
					<td><?php echo $row['quantity']; ?></td>
					<td><?php echo number_format($x_total, 2); ?></td>
				</tr>
		
				
<?php
		
		
			}
?>
		<tr>
			<th>TOTAL:</th>
			<td><?php echo number_format($total, 2);  ?></td>
			<td><?php echo $q_total; ?></td>
			<td><?php echo number_format($a_total, 2); ?></td>
		</tr>
		<tr>
			<td colspan="5"><button style="background-color: #C67D01;" name="remove">Delivered</button></td>
		</tr>
<?php

		}
	}
?>


<?php
	if (isset($_GET['date'])) {
		$Y 		= mysqli_real_escape_string($db,$_GET['Y']);
		$M 		= mysqli_real_escape_string($db, $_GET['M']);


		if (($Y == 00) || ($M == 00)) {
			echo "<h1 style='text-align: center;'>Date Format Error</h1>";
		} else {
			$query1 	= "SHOW Tables WHERE Tables_in_restaurant = 'purchase'";
			$result1 	= mysqli_query($b_db, $query1);

			if (mysqli_num_rows($result1) > 0) {
				$i = 0;
				while ($row1 = mysqli_fetch_array($result1)) {
					$query 		= "SELECT * FROM $row1[0] WHERE created LIKE '$Y-$M%'";
					$result 	= mysqli_query($b_db, $query);
					$mysqli_row = mysqli_num_rows($result);
					if (mysqli_num_rows($result) > 0) {
						$i = 1;
						?>
							<tr><td colspan="10"><?php echo $row1[0];?></td></tr>
				<tr>
					<td>id</td>
					<td>email</td>
					<td>product</td>
					<td>quantity</td>
					<td>price</td>
					<td>DP</td>
					<td>address</td>
					<td>contact number</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created(YYYY/MM/DD HH:MM:SS)</td>
				</tr>
						<?php
						while ($row = mysqli_fetch_array($result)) {
							?>
							<tr>
								<td><?php echo $row['id'];?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['product']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['DP']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['cont']; ?></td>
								<td><?php echo $row['Dtime']; ?></td>
								<td><?php echo $row['created'] ?></td>
							</tr>
							
							<?php
						}
					} if(mysqli_num_rows($result) < 1 && $i == 0){ echo "<h1 style='text-align: center;'>No Records Found</h1>"; $i = 1;}
				} 
			} 
		}
	}


?>

<?php
	//User
	if (isset($_GET['user'])) {
		
		$x 			= $_GET['user'].'_dp';
		$query 		= "SELECT * FROM $x";
		$result 	= mysqli_query($db,$query);
		if (mysqli_num_rows($result) > 0) {
			$int = 0;
			?>
	<form method="post" action="">

		<tr><td colspan="11"><?php echo $x;?></td></tr>
				<tr>
					<td>id</td>
					<td>product</td>
					<td>quantity</td>
					<td>price</td>
					<td>DP</td>
					<td>address</td>
					<td>contact number</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created</td>
					<td>remove</td>
				</tr>
			<?php
			while ($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td rowspan=""><?php echo $row['id'];?></td>
								<td><?php echo $row['product']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['DP']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo $row['cont']; ?></td>
								<td><?php echo $row['Dtime']; ?></td>
								<td><?php echo $row['created'] ?></td>
			<td><input type="checkbox" name="claimed[]" value="<?php echo $row['id'];?>"></td>
		</tr>
		
		
<?php 
				}	?>
					<tr><td colspan="11"><button type="submit" name="remove">remove</button></td></tr>
	</form>
				<?php
			} if(mysqli_num_rows($result) == 0 ){echo "<h1 style='text-align: center;'>No Records Found</h1>";}
		}
			?>

<?php

if (isset($_POST['remove'])) {
			if (!empty($_POST['delivery'])) {
					$res 	= "DELETE FROM $x WHERE DP LIKE '%Delivery%' ";
					mysqli_query($db,$res);
			}
			if (!empty($_POST['pickup'])) {
				$res 		= "DELETE FROM $x WHERE DP LIKE '%Pickup%'";
				mysqli_query($db, $res);

			}
			if (!empty($_POST['claimed'])) {
				foreach ($_POST['claimed'] as $claimed) {
				}
				$res 		= "DELETE FROM $x WHERE id='$claimed'";
				mysqli_query($db, $res);
				
			}
			header('Refresh:1 url=OTG.php');

		}	

?>
