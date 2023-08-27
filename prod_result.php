<?php

	 $tables = "show tables";
	 $table_result = mysqli_query($db, $tables);
	 $array = array();
	 $y = 1;

	 if (mysqli_num_rows($table_result) > 0) {
	 	while ($table_row = mysqli_fetch_array($table_result)) {
	 		array_push($array, $table_row[0]);
	 	}
	 }
	 $x = count($array);

	 for ($i=0; $i < $x ; $i++) { 
	 	$cols = "SELECT * FROM $array[$i] ORDER BY img ASC";
	 	$cols_result = mysqli_query($db, $cols);
?>

	<li>
		<div style=" height:300px; overflow-y:scroll;">
				<table class="prod_table" border="1" style="background-color: #fff;">
						<tr>
							<th colspan="7"><?php echo $array[$i]; ?></th>
						</tr>
						<tr>
							<th colspan="3">toggle</th>			
							<th>id</th>
							<th>type</th>
							<th>price</th>
							<th>img</th>
						</tr>

<?php

	 	if (mysqli_num_rows($cols_result) > 0) {
	 		while ($cols_row = mysqli_fetch_array($cols_result)) {

?>
				
						
						<tr>
							<td><button id="<?php echo $y ?>" onclick="toggle(this)" >toggle</button></td>
					<form method="post" action="">
							<td><button name="update" class="z" value="<?php echo $cols_row['id'] ?>" disabled>update</button></td>
							<td><button name="delete" onclick="return submitForm(this)" value="<?php echo $cols_row['id'] ?>">delete</button></td>
							<td><?php echo $cols_row['id']; ?></td>
							<td><input type="text" name="type" class="z" disabled="" style="width: 110px;" value="<?php echo $cols_row['type'] ?>"></td>
							<td><input type="text" name="price" class="z" disabled="" style="width: 65px" value="<?php echo $cols_row['price'] ?>"></td>
							<td><input type="text" name="img" class="z" disabled="" style="width: 55px;" value="<?php echo $cols_row['img'] ?>"></td>
						</tr>
					</form>
				
			
<?php
	 		$y++;}
	 		echo "</table></div> </li>";	
	 	}
	 }
?>