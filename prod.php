<?php include('prod_server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="CSS/main.css">	
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" type="text/css" href="CSS/product.css">
	</head>
	<body>


		<ul class="header">
				<li><span style="font-size:30px;cursor:pointer;   color: #FFE16C;" onclick="openNav()">&#9776; Add Product</span></li>
				<li><a href="index.php">reservations</a></li>
				<li><a href="OTG.php">On-The-Go</a></li>
				<li><a href="account.php">accounts</a></li>
				<li><a href="#" class="active">Products</a></li>
		</ul>
		<ul class="prod">
			<?php include('prod_result.php') ?>
		</ul>

		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<div class="overlay-content">
				
	
			
				<form method="post" action="">
					<select name="table">
						<option value="bev">Beverages</option>
						<option value="chicken">Chicken</option>
						<option value="combo">Combo</option>
						<option value="fish">Fish</option>
						<option value="pork">Pork</option>
						<option value="soup">Soup</option>
					</select>
					<input type="text" name="id" placeholder="id">
					<input type="text" name="type" placeholder="type">
					<input type="text" name="price" placeholder="price">
					<input type="text" name="img" placeholder="img">
					<br>
					<button type="submit" name="add">Add Product</button>
				</form>
				

				
			</div>
		</div>

		<script type="text/javascript" src="JS/product.js"></script>
		<script type="text/javascript" src="JS/main.js"></script>
	</body>
</html>