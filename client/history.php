<?php
include ('purchase.php');
include('auth.php');
include ('info.php');
include('reserve.php');
?>

<!DOCTYPE html> 
<html>
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="CSS\main.css">
		<link rel="stylesheet" type="text/css" href="CSS\menu.css">
		<link rel="stylesheet" type="text/css" href="CSS\history.css">
		
	</head>
	<body>
		<div id="home" style="margin:50px 0 0 0 ;" class="parallax4">
				<div class="text">history</div>
				<br><br>
				<span class="curtain" onclick="openNav()">&#9776; Reservation</span>
				<span class="curtain" onclick="openNav1()">&#9776; Purchase</span>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">

			<table border="1" id="reserve">
				<form method="post" action="">
					<tr>
						<th>head</th>
						<th>date of reservation</th>
						<th>Remove Reservation</th>
					</tr>
				
					<?php
						$reserve 	= "SELECT * FROM $username$R ORDER BY Dtime ASC";
						$result_reserve = mysqli_query($acc,$reserve);

						if (mysqli_num_rows($result_reserve) > 0) {
							while ($row_reserve = mysqli_fetch_array($result_reserve)) {
					?>

						<tr>
							<td><?php echo $row_reserve['head']; ?></td>
							<td><?php echo $row_reserve['Dtime']; ?></td>
							<td><input type="checkbox" name="reserve[]" value="<?php echo $row_reserve['id']; ?>"></td>
						</tr>

					<?php
							}
						}
					?>
			
					

					<tr><td colspan="3"><button type="submit" class="history_btn" name="cancel">remove</button></td></tr>
				</form>
			</table>
		</div>
  </div>

  <div id="myNav1" class="overlay" style="overflow: auto;">
  <a href="javascript:void(1)" class="closebtn" onclick="closeNav1()">&times;</a>
  <div class="overlay-content">

			<table border="1" id="reserve">
				<form method="post" action="">
					<tr>
						<th>product</th>
						<th>price</th>
						<th>quantity</th>
						<th>D or P</th>
						<th>P Time</th>
						<th>Date purchase</th>
						<th>address</th>
						<th>Remove Product</th>
					</tr>
			
					<?php
						$bought 	= "SELECT * FROM $username$D_P ORDER BY id ASC";
						$result_bought = mysqli_query($acc,$bought);

						if (mysqli_num_rows($result_bought) > 0) {
							while ($row_bought = mysqli_fetch_array($result_bought)) {
					?>

						<tr>
							<td><?php echo $row_bought['product']; ?></td>
							<td><?php echo $row_bought['price']; ?></td>
							<td><?php echo  $row_bought['quantity']; ?></td>
							<td><?php echo $row_bought['DP']; ?></td>
							<td><?php echo $row_bought['Dtime']; ?></td>
							<td><?php echo $row_bought['created']; ?></td>
							<td><?php echo $row_bought['address']; ?></td>
							<td><input type="checkbox" name="prod[]" value="<?php echo $row_bought['id'] ?>"></td>
						</tr>

					<?php
							}
						}
					?>
					<tr><td colspan="8"><button type="submit" name="remove" class="history_btn">remove</button></td></tr>

				</form>
			</table>
		</div>
  </div>


		</div>


		<div style="margin:50px 0 0 0 ;" class="parallax5ss">
			<p class="cut">history about the company </p>
			<p class="cut">Tree and branches and other achievements(hall of fame)</p>
		</div>
			

			

				<!-- Cart-->

			<div class="modal" id="cart"> 
				<div class="modal-content animate ">
						<table class="table" border="1">
							<tr>
								<th style="width: 33.5%;">Item Name</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Total</th>
								<th style="width: 30%;">apply</th>
								<th style="width: 30%;">remove/buy</th>
							</tr>
							<form action="" method="post">

								<!--php codes-->
							
									<?php
				$query = "SELECT * FROM $username$C  ORDER BY id ASC";
				$result = mysqli_query($acc, $query);
				$total = 0;
				$x 	 = "1";
				if(mysqli_num_rows($result) > 0)
				{
					
				while($row = mysqli_fetch_array($result))
				{
					

			
			?>
	

									<tr>
										<td><?php echo $row['item_name']; ?></td>
										<td> <?php echo $row['price']; ?></td>
										<input type="hidden" name="price" value="<?php echo $row['price']; ?>">
										<td><input type="number" name="<?php echo $row['id']; ?>" value="<?php echo htmlspecialchars($row['quantity'])?>" min="1"></td>
										<input type="hidden" name="quan" value="<?php echo htmlspecialchars($row['quantity']); ?>">
										<td><?php echo number_format($row['price'] * $row['quantity'],2); ?></td>
										<td><input type="checkbox" name="radio[]" value="<?php echo $row['id']?>" id="<?php echo $x;?>"></td>
										<td><input type="checkbox" name="check[]" value="<?php echo htmlspecialchars($row['item_name']) ?>" style="display: inline-block;"></td>
										
									</tr>

								<?php $x++;$total = $total + ($row['price'] * $row['quantity']); }}  ?>
								<tr>

									<td colspan="2"><button type="submit" name="remove" class="small_btn">Remove</button></td>
									<td ><button type="submit" name="apply" class="small_btn">Apply</button></td>
									<td><?php echo number_format($total,2) ?></td>
									<td></td>
									<td><input type="checkbox" onclick="toggle(this)" name="truncate"> select all</td>

								</tr>


									</table>
													
		
							<?php echo "<input type='hidden' name='email' value=".$view['email']." >";  ?>
							<?php echo "<input type='hidden' name='fname' value=".$view['fname']." >";  ?>
							<?php echo "<input type='hidden' name='lname' value=".$view['lname']." >";  ?>
							<?php echo "<input type='hidden' name='cont' value=".$view['cont']." >";  ?>

								<select class="select disabled" name="province" disabled>
									<option value="laguna">laguna</option>
								</select>

								<select class="select disabled" name="city" disabled>
									<option value="losbanos">losbanos</option>
								</select>
								<br>

								<select class="select disabled" name="brgy" disabled>
									<option selected="" value="000" id="man">Barangay</option>
									<?php
										$loc_query 	= "SELECT * FROM lb_m";
										$loc_result	= mysqli_query($loc, $loc_query);
										if (mysqli_num_rows($loc_result) > 0) {
											while($loc_row = mysqli_fetch_array($loc_result)) {
									?>
									<option value="<?php echo $loc_row['brgy']; ?>"><?php echo $loc_row['brgy']; ?></option>

									<?php
										}
									}
									?>
								</select>

								<select class="select" onchange="select()" name="DP">
									<option id="pick" value="Pickup" selected="">Pickup</option>
									<option value="Delivery">Delivery</option>
									
								</select>
								
								<input type="time" class="txt" name="time" class="select" id="e" value="00:00">
								<br>
								<br>
							
							<button type="submit" name="purchase" class="small">Purchase</button>

							</form>

						<button onclick="document.getElementById('cart').style.display='none'" class="small" style="float: right;">Exit</button>
						<?php include('error.php'); ?>
				</div>
			</div>
		</div>
	

			<ul id="heading">
				<li><a href="index.php">home</a></li>
				<li><a href="index.php?#about">about</a></li>
				<li><a href="index.php?#menu">menu</a></li>
				<li><a href="index.php?#contact">contact</a></li>
				<li><a href="index.php?#take-out">take-out</a></li>
				<li><a href="history.php">history</a></li>
				<li style="float: right;"><a href="logout.php">log out</a></li>
				<li style="float: right;"><button class="btn" onclick="document.getElementById('cart').style.display='block'">add to cart</button></li>
				<li style="float: right;"><a href="settings.php"><?php echo $_SESSION['username']; ?> &#9881;</a></li>
			</ul>
	
	
			<script type="text/javascript" src="JS\main.js"></script>	
			<script type="text/javascript" src="JS\select.js"></script>
			<script type="text/javascript">
				function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

				function openNav1() {
  document.getElementById("myNav1").style.height = "100%";
}

function closeNav1() {
  document.getElementById("myNav1").style.height = "0%";
}
			</script>

	</body>
</html>