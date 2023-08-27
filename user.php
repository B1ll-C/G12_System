	<?php
if (isset($_POST['but'])) {
				$select 		= $_POST['but'];
				?>
<table border="1" style="width: 100%;">
	<form>
				<?php
				if (preg_match('/_dp/', $select)) {
					?>
						<tr><th colspan="8"><?php echo $select;?></th></tr>
						<tr>
							<th>id</th>
							<th>product</th>
							<th>DP</th>
							<th>Dtime(YYYY/MM/DD/TT:TT)</th>
							<th>created</th>
							<th>address</th>
							<th>contact number</th>
							<th>remove</th>
						</tr>
					<?php
					$tab 	= "SELECT * FROM $select ORDER BY Dtime Asc";
					$tab_result = mysqli_query($db, $tab);
					if (mysqli_num_rows($tab_result) > 0) {
						while ($tab_row = mysqli_fetch_array($tab_result)) {
						
							
					?>
					<tr>
						<td><?php echo $tab_row['id']?></td>
						<td><?php echo $tab_row['product']?></td>
						<td><?php echo $tab_row['DP']?></td>
						<td><?php echo $tab_row['Dtime']?></td>
						<td><?php echo $tab_row['created']?></td>
						<td><?php echo $tab_row['address']?></td>
						<td><?php echo $tab_row['cont']?></td>
						<td style="text-align: center;"><input type="checkbox" name="" style="height: 50px; width: 50px;"></td>
					</tr>



					<?php
				}
					}
					}
					?>

				


					<?php
				if (preg_match('/_r/', $select)) {
					$tab 	= "SELECT * FROM $select ORDER BY Dtime Asc";
					$tab_result 	= mysqli_query($db,$tab);

				?>
				<tr><th colspan="5"><?php echo $select; ?></th></tr>
				<tr>
					<th>id</th>
					<th>head</th>
					<th>Dtime(YYYY/MM/DD/TT:TT)</th>
					<th>created</th>
					<th>remove</th>
				</tr>

				<?php
					if (mysqli_num_rows($tab_result) > 0) {
						while ($tab_row = mysqli_fetch_array($tab_result)) {
							
											
				?>

				<tr>
					<td rowspan="2"><?php echo $tab_row['id']?></td>
					<td><?php echo $tab_row['head']?></td>
					<td><?php echo $tab_row['Dtime']?></td>
					<td><?php echo $tab_row['created']?></td>
					<td rowspan="2" style="text-align: center;"><input type="checkbox" name="" style="height: 50px; width: 50px;"></td>
				</tr>
				<tr><th colspan="3"><?php echo $tab_row['msg'];?></th></tr>

				<?php
			}}
			}
			echo "<tr><td colspan='5'><button name='remove' type='submit'>"."remove"."</button></td></tr>";
			 echo "</form></table>";


		}
		?>

		