<?php include('server.php'); 
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="view.css">
	</head>
	<body>
		<?php include('error.php'); ?>

		<div id="type" class="tab">
					<button class="tablinks" id="defaultOpen" onclick="menus(event, 'chicken')">Chicken</button>
					<button class="tablinks" onclick="menus(event, 'pork')">Pork</button>
					<button class="tablinks" onclick="menus(event, 'fish')">Fish</button>
					<button class="tablinks" onclick="menus(event, 'soup')">Soup</button>
					<button class="tablinks" onclick="menus(event, 'beverages')">Beverages</button>
					<button class="tablinks" onclick="menus(event, 'combo')">Combo</button>
				
		</div>

		<div class="margin tabcontent" id="chicken">
			<p>chiken</p>
			<form action="" method="post">
				<input type="text" name="c" placeholder="Insert Product Id">
				<input type="text" name="ctype" placeholder="Insert Product Name">
				<input type="text" name="cprice" placeholder="Insert Product Price">
				<button name="chick">Submit</button>
			</form>
			<table border="1">
			<?php
				$query = "SELECT * FROM chicken ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = 0;
				if(mysqli_num_rows($result) > 0)
				{
				while($row = mysqli_fetch_array($result))
				{
					
			
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['price']; ?></td>
			</tr>
		<?php }} ?>
			</table>
		

		</div>

		<div class="margin tabcontent" id="pork">
			<p>pork</p>
			<form action="" method="post">
				<input type="text" name="p" placeholder="Insert Product Id">
				<input type="text" name="ptype" placeholder="Insert Product Name">
				<input type="text" name="pprice" placeholder="Insert Product Price">
				<button name="pork">Submit</button>
			</form>
			<table border="1">
			<?php
				$query = "SELECT * FROM pork ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = 0;
				if(mysqli_num_rows($result) > 0)
				{
				while($row = mysqli_fetch_array($result))
				{
					
			
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['price']; ?></td>
			</tr>
		<?php }} ?>
			</table>
		</div>

		<div class="margin tabcontent" id="fish">
			<p>fish</p>
			<form action="" method="post">
				<input type="text" name="f" placeholder="Insert Product Id">
				<input type="text" name="ftype" placeholder="Insert Product Name">
				<input type="text" name="fprice" placeholder="Insert Product Price">
				<button name="fish">Submit</button>
			</form>
			<table border="1">
			<?php
				$query = "SELECT * FROM fish ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = 0;
				if(mysqli_num_rows($result) > 0)
				{
				while($row = mysqli_fetch_array($result))
				{
					
			
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['price']; ?></td>
			</tr>
		<?php }} ?>
			</table>
		</div>

		<div class="margin tabcontent" id="soup">
			<p>soup</p>
			<form action="" method="post">
				<input type="text" name="s" placeholder="Insert Product Id">
				<input type="text" name="stype" placeholder="Insert Product Name">
				<input type="text" name="sprice" placeholder="Insert Product Price">
				<button name="soup">Submit</button>
			</form>
			<table border="1">
			<?php
				$query = "SELECT * FROM soup ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = 0;
				if(mysqli_num_rows($result) > 0)
				{
				while($row = mysqli_fetch_array($result))
				{
					
			
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['price']; ?></td>
			</tr>
		<?php }} ?>
			</table>
		</div>

		<div class="margin tabcontent" id="beverages">
			<p>bevereges</p>
			<form action="" method="post">
				<input type="text" name="b" placeholder="Insert Product Id">
				<input type="text" name="btype" placeholder="Insert Product Name">
				<input type="text" name="bprice" placeholder="Insert Product Price">
				<button name="bev">Submit</button>
			</form>
			<table border="1">
			<?php
				$query = "SELECT * FROM bev ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = 0;
				if(mysqli_num_rows($result) > 0)
				{
				while($row = mysqli_fetch_array($result))
				{
					
			
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['price']; ?></td>
			</tr>
		<?php }} ?>
			</table>
		</div>


		<div class="margin tabcontent" id="combo">
			<p>bundle</p>
			<form action="" method="post">
				<input type="text" name="cb" placeholder="Insert Product Id">
				<input type="text" name="cbtype" placeholder="Insert Product Name">
				<input type="text" name="cbprice" placeholder="Insert Product Price">
				<button name="bundle">Submit</button>
			</form>
			<table border="1">
			<?php
				$query = "SELECT * FROM combo ORDER BY id ASC";
				$result = mysqli_query($db, $query);
				$total = 0;
				if(mysqli_num_rows($result) > 0)
				{
				while($row = mysqli_fetch_array($result))
				{
					
			
			?>

			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['price']; ?></td>
			</tr>
		<?php }} ?>
			</table>
		</div>
		<script type="text/javascript" src="js.js"></script>
	</body>
</html>