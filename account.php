<?php 
include('crud_server.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<link rel="stylesheet" type="text/css" href="CSS/crud.css">

	</head>
	<body>


		<ul class="header">






			<form method="get" action="">

				<li>

					<select onchange="month()" name="M">

						<option selected="" value="00">Month</option>
						<option value='01' class="month">January</option>
						<option value='02' class="month">February</option>
						<option value='03' class="month">March</option>
						<option value='04' class="month">April</option>
						<option value='05' class="month">May</option>
						<option value='06' class="month">June</option>
						<option value='07' class="month">July</option>
						<option value='08' class="month">August</option>
						<option value='09' class="month">September</option>
						<option value='10' class="month">October</option>
						<option value='11' class="month">November</option>
						<option value='12' class="month">December</option>

					</select>

				</li>

				<li>

					<select id="year" name="Y">
					</select>

				</li>


				<li><button name="date">search</button></li>
				<li><a href="index.php">reservations</a></li>
				<li><a href="OTG.php">On-The-Go</a></li>
				<li><a href="account.php" class="active">accounts</a></li>
				<li><a href="prod.php">Products</a></li>

			</form>

		</ul>

		<div class="container">
			<table id="table">
			<tr><td colspan="12"><input type="text" name="" id="filter" onkeyup="filter()"></td></tr>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
				<th>First  Name</th>
				<th>Last Name</th>
				<th>Contact Number</th>
				<th>Created</th>
				<th>Access</th>
				<th colspan="3">Action</th>
			</tr>
			<?php include('crud_result.php'); ?>
		</table>
		</div>


		
	

	



	

		<script type="text/javascript" src="JS/main.js"></script>
		<script type="text/javascript" src="JS/crud.js"></script>
		<script type="text/javascript" src="JS/filter.js"></script>


	</body>
</html>