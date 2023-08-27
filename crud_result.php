<?php
	$db 	= mysqli_connect('localhost','thesis','cdlbthesisict','form');

	$query 	= "SELECT * FROM accounts ORDER BY created ASC";
	$result = mysqli_query($db, $query);
	$num_rows = mysqli_num_rows($result);
	$x	= 1;
?>

<?php
	if ($num_rows > 0) {
		while ($row = mysqli_fetch_array($result)) {
?>	
	<tr>
		<form method="post" action="">
			<td><?php echo $row['id']; ?></td>
			<td style="width: 90px;"><?php echo $row['username']; ?></td>
			<td><input type="text" style="width: 140px; cursor: not-allowed;" class="z" name="email" value="<?php echo $row['email']; ?>" disabled></td>
			<td><input type="text" style="width: 250px; cursor: not-allowed;" class="z" name="password" value="<?php echo $row['password']; ?>" disabled></td>
			<td><input type="text" style="width:  60px; cursor: not-allowed;" class="z" name="fname" value="<?php echo $row['fname']; ?>" disabled></td>
			<td><input type="text" style="width:  70px; cursor: not-allowed;" class="z" name="lname" value="<?php echo $row['lname']; ?>" disabled></td>
			<td><input type="text" style="width: 100px; cursor: not-allowed;" class="z" name="cont" value="<?php echo $row['cont']; ?>" disabled></td>
			<td style="width: 250px;"><?php echo $row['created']; ?></td>

			<!-- <td><input type="text" style="width:  70px; cursor: not-allowed;" class="z" name="access" value="<?php echo $row['access']; ?>" disabled></td>	 -->

			<td>
				<select style="width:  100px; cursor: not-allowed;" class="z" name="access" disabled>
					<?php
						if ($row['access'] == 'granted') {
							echo "<option value='granted' selected>granted</option>";
							echo "<option value='banned'>banned</option>";
						} else {
							echo "<option value='granted'>granted</option>";
							echo "<option value='banned' selected>banned</option>";
						}
					?>
				</select>
			</td>

			<td><button name="delete" value="<?php echo $row['username']?>" onclick="return submitForm(this);">DELETE</button></td>
			<td><button style="cursor: not-allowed;" name="update" class="z" value="<?php echo $row['username'];?>" disabled>UPDATE</button></td>
		</form>
		<td><button id="<?php echo htmlspecialchars($x) ?>" onclick="toggle(this)">TOGGLE</button></td>
	</tr>
<?php
		$x++;}
	}
?>
