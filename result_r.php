<?php
//modules
include('server.php');
?>

<?php
	//reservation Day1 result button
	if (isset($_GET['reserve_day1'])) {
		$x 			= $_GET['reserve_day1'];
		$query 		= "SELECT * FROM $x WHERE Dtime like '%$d%'";
		$result 	= mysqli_query($db,$query);
		if (mysqli_num_rows($result) > 0) {
			?>
	<form method="post" action="">

		<tr><td colspan="5"><?php echo $x;?></td></tr>
				<tr>
					<td>id</td>
					<td>head</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created</td>
					<td>remove</td>
				</tr>
			<?php
			while ($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td rowspan="2"><?php echo $row['id'];?></td>
			<td><?php echo $row['head']; ?></td>
			<td><?php echo $row['Dtime']; ?></td>
			<td><?php echo $row['created'] ?></td>
			<td><input type="checkbox" name="claim[]" value="<?php echo $row['id'];?>"></td>
		</tr>
		<tr>
			<td colspan="4"><b>Message:</b><?php echo $row['msg'];?></td>
		</tr>
		<tr><td colspan="5"><button style="background-color: #C67D01;" type="submit" name="remove">remove</button></td></tr>
	</form>
<?php }}}	?>




<?php
	//reservation Day2 result button
	if (isset($_GET['reserve_day2'])) {
		$x 			= $_GET['reserve_day2'];
		$query 		= "SELECT * FROM $x WHERE Dtime like '%$d1%'  ";
		$result 	= mysqli_query($db,$query);

		if (mysqli_num_rows($result) > 0) {
			?>
<tr><td colspan="5"><?php echo $x;?></td></tr>
				<tr>
					<td>id</td>
					<td>head</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created</td>
				</tr>
			<?php
			while ($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td rowspan="2"><?php echo $row['id'];?></td>
			<td><?php echo $row['head']; ?></td>
			<td><?php echo $row['Dtime']; ?></td>
			<td><?php echo $row['created'] ?></td>
		</tr>
		<tr>
			<td colspan="4"><b>Message:</b><?php echo $row['msg'];?></td>
		</tr>
<?php }}}?>

<?php
	//reservation Day3 result button
	if (isset($_GET['reserve_day3'])) {
		$x 			= $_GET['reserve_day3'];
		$query 		= "SELECT * FROM $x WHERE Dtime like '%$d2%'  ";
		$result 	= mysqli_query($db,$query);

		if (mysqli_num_rows($result) > 0) {
			?>

		<tr><td colspan="5"><?php echo $x;?></td></tr>
				<tr>
					<td>id</td>
					<td>head</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created</td>
				</tr>
			<?php
			while ($row = mysqli_fetch_array($result)) {
	?> 
		<tr>
			<td rowspan="2"><?php echo $row['id'];?></td>
			<td><?php echo $row['head']; ?></td>
			<td><?php echo $row['Dtime']; ?></td>
			<td><?php echo $row['created'] ?></td>
		</tr>
		<tr>
			<td colspan="4"><b>Message:</b><?php echo $row['msg'];?></td>
		</tr>
<?php }}}?>
<?php
	//User
	if (isset($_GET['user'])) {
		$x 			= $_GET['user'].'_r';
		$query 		= "SELECT * FROM $x";
		$result 	= mysqli_query($db,$query);
		if (mysqli_num_rows($result) > 0) {
			?>
	<form method="post" action="">

		<tr><td colspan="5"><?php echo $x;?></td></tr>
				<tr>
					<td>id</td>
					<td>head</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created</td>
					<td>remove</td>
				</tr>
			<?php
			while ($row = mysqli_fetch_array($result)) {
	?>
		<tr>
			<td rowspan="2"><?php echo $row['id'];?></td>
			<td><?php echo $row['head']; ?></td>
			<td><?php echo $row['Dtime']; ?></td>
			<td><?php echo $row['created'] ?></td>
			<td><input type="checkbox" name="claim[]" value="<?php echo $row['id'];?>"></td>
		</tr>
		<tr>
			<td colspan="4"><b>Message:</b><?php echo $row['msg'];?></td>
		</tr>
		<tr><td colspan="5"><button type="submit" name="remove">remove</button></td></tr>
	</form>
<?php }}}	?>


<?php
	if (isset($_GET['date'])) {
		$Y 		= mysqli_real_escape_string($db,$_GET['Y']);
		$M 		= mysqli_real_escape_string($db, $_GET['M']);

		if (($Y == 00) || ($M == 00)) {
			echo "<h1 style='text-align: center;'>Date Format Error</h1>";
		} else {
			$query1 	= "SHOW Tables WHERE Tables_in_restaurant = 'reservation'";
			$result1 	= mysqli_query($b_db, $query1);

			if (mysqli_num_rows($result1) > 0) {
				$i = 0;
				while ($row1 = mysqli_fetch_array($result1)) {
					$query 		= "SELECT * FROM $row1[0] WHERE Dtime LIKE '$Y/$M%'";
					$result 	= mysqli_query($b_db, $query);
					$mysqli_row = mysqli_num_rows($result);
					if (mysqli_num_rows($result) > 0) {
						$i = 1;
						?>
							<tr><td colspan="5"><?php echo $row1[0];?></td></tr>
				<tr>
					<td>id</td>
					<td>email</td>
					<td>head</td>
					<td>date of reservation (YYYY/MM/DD HH:MM)</td>
					<td>date created(YYYY/MM/DD HH:MM:SS)</td>
				</tr>
						<?php
						while ($row = mysqli_fetch_array($result)) {
							?>
							<tr>
								<td rowspan="2"><?php echo $row['id'];?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['person']; ?></td>
								<td><?php echo $row['Dtime']; ?></td>
								<td><?php echo $row['created'] ?></td>
							</tr>
							<tr>
								<td colspan="4"><b>Message:</b><?php echo $row['msg'];?></td>
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

if (isset($_POST['remove'])) {
			if (!empty($_POST['claim'])) {
				foreach ($_POST['claim'] as $claimed) {
					$res 	= "DELETE FROM $x WHERE id = $claimed ";
					mysqli_query($db,$res);
				}
			}
			header('Refresh:1 url = index.php?registered = registered');
		}	

?>
