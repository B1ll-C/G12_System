<?php include('server.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
	</head>
	<body>

		


		<ul class="header">

			<li><span style="font-size:30px;cursor:pointer;   color: #FFE16C;" onclick="openNav()">&#9776; USERS</span></li>




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
				<li><a href="OTG.php" class="active">On-The-Go</a></li>
				<li><a href="account.php">Accounts</a></li>
				<li><a href="prod.php">Products</a></li>
				<!-- <li><a href="#">Expansion</a></li> -->

			</form>

		</ul>

		<div class="container">
			<div class="D_P " style="text-align: center; background-color: #fff;">
				<h1>delivery</h1>

				<h1><?php echo $date_1; ?></h1>
				<ul>
					<form method="get" action="">
						<?php include('day1_OTG.php');?>
						
					</form>
				</ul>
			</div>


		
			
		</div>

			<table class="result" border="1">
				<?php include('result_dp.php'); ?>
			</table>




		<div id="myNav" class="overlay">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<input type="text" name="" id="myInput" onkeyup="myFunction()" placeholder="&#128269 Search User" class="search">
			<div class="overlay-content">
		
				<form method="get" action="">
					<ul id="myUL">
						<?php include('use.php');?>
					</ul>
				</form>
				

				
			</div>
		</div>
		<script type="text/javascript" src="JS/main.js"></script>
		<script type="text/javascript" src="JS/refresh.js"></script>


	</body>
</html>