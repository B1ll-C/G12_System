
<?php
include ('purchase.php');
include('auth.php');
include ('info.php');
	?>



<!DOCTYPE html> 
<html>
	<head>
		<title>HomePage</title>
		<link rel="stylesheet" type="text/css" href="CSS/main.css">
		<link rel="stylesheet" type="text/css" href="CSS/menu.css">
		<style type="text/css">html {scroll-behavior: smooth;}</style>
		
	</head>
	<body>
		<div id="home" style="margin:50px 0 0 0 ;" class="parallax4">
				<div class="text">welcome</div>
		</div>

		<div id="about" class="parallax5 ">
			<h1 class="">about</h1>

		</div>

		<div id="about" class="parallax2 ">
			<h1 class="">menu</h1>

			<div id="type" class="tab">
					<button class="tablinks"  onclick="menus(event, 'chicken')">Chicken</button>
					<button class="tablinks" onclick="menus(event, 'pork')">Pork</button>
					<button class="tablinks" onclick="menus(event, 'fish')">Fish</button>
					<button class="tablinks" onclick="menus(event, 'soup')">Soup</button>
					<button class="tablinks" onclick="menus(event, 'beverages')">Beverages</button>
					<button class="tablinks" onclick="menus(event, 'combo')">Combo</button>
				</div>

				<div class="margin tabcontent" id="chicken">
					<img src="CSS/1.jpg" class="product">
					<br>
					<h2>1CPH paa-hita P85</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/1.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/1.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/1.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
				</div>

				<div class="margin tabcontent" id="pork">
					<img src="CSS/4.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/4.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/4.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/4.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
				</div>

				<div class="margin tabcontent" id="fish">
					<img src="CSS/3.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/3.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/3.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/3.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
				</div>

				<div class="margin tabcontent" id="soup">
					<img src="CSS/5.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/5.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/5.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/5.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
				</div>



				<div class="margin tabcontent" id="beverages">
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
				</div>

				<div class="margin tabcontent" id="combo">
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product P100</h2>
					<p>desciption of the product</p>
					<hr>
					<img src="CSS/2.jpg" class="product">
					<br>
					<h2>product p200</h2>
					<p>desciption of the product</p>
				</div>

		</div>
			
			

			<div id="contact" class="parallax3">
				<h1 class="">contact</h1>
				<hr>
				<div class="find">
					<p>Find us at some address at some place or call us at 05050515-122330</p>
					<p ><span>FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
					<p ><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
				</div>
				<form method="post" action="">
				
					<?php echo "<input type='hidden' name='email' value=".$view['email']." >";  ?>
					<?php echo "<input type='hidden' name='fname' value=".$view['fname']." >";  ?>
					<?php echo "<input type='hidden' name='lname' value=".$view['lname']." >";  ?> 

					<label class="label">Date and Time:</label>
					<br>
					<select class="select" name="month" onchange="m()">

						<option selected="">Month</option>
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
					<select class="select" id="date" name="day">
						<option value="00">Day</option>
					</select>
					<input type="time" name="time" class="select">
					<br>
					<label class="label">Person:</label>
						<input type="number" name="person" placeholder="How Many?" min="1" id="time">
					
					<br>
					<textarea class="msg" name="msg" placeholder="(this section is optional): Message,Request, or Orders"></textarea>
					<button id="btn" type="submit" name="booked">Book Reservation</button>
					<?php include('error.php'); ?>
							
					
				</form>
		

			</div>

			<div id="take-out" class="parallax">
				<h1 class="">take-out</h1>

			
				<div id="type" class="tab">
					<button class="tablinks" id="defaultOpen" onclick="menus(event, 'tchicken')">Chicken</button>
					<button class="tablinks" onclick="menus(event, 'tpork')">Pork</button>
					<button class="tablinks" onclick="menus(event, 'tfish')">Fish</button>
					<button class="tablinks" onclick="menus(event, 'tsoup')">Soup</button>
					<button class="tablinks" onclick="menus(event, 'tbeverages')">Beverages</button>
					<button class="tablinks" onclick="menus(event, 'tcombo')">Combo</button>
				
				</div>

					<div class="tabcontent tk" id="tchicken" >


						<?php
						$query = "SELECT * FROM chicken ORDER BY img ASC";
						$result = mysqli_query($connect, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
						while($row = mysqli_fetch_array($result))
						{
						?>
						<div>
							<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >
						
							<img src="prod_img/<?php echo $row['img']; ?>" class="img" /><br />
					 
							<h3 class="text-info"><?php echo $row["type"]; ?></h3>
					 
							<h3 class="text-danger">&#8369; <?php echo $row["price"]; ?></h3>
					 
							<input type="number" name="quantity" value="1" class="quantity" min="1" max="30" >
					
							<input type="hidden" name="hidden_name" value="<?php echo $row["type"]; ?>" >
					 
							<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
					 
							<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					 
							</form>
						</div>
				
					<?php
					}
					}
					?>	

				</div>

				<div class="margin tabcontent tk" id="tpork">
					<?php
					$query = "SELECT * FROM pork ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div>
						<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >
					
						<img src="prod_img/<?php echo $row["img"]; ?>" class="img" /><br />
				 
						<h3 class="text-info"><?php echo $row["type"]; ?></h3>
				 
						<h3 class="text-danger">&#8369; <?php echo $row["price"]; ?></h3>
				 
						<input type="number" name="quantity" value="1" class="quantity" min="1" max="30" >
				
						<input type="hidden" name="hidden_name" value="<?php echo $row["type"]; ?>" >
				 
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
				 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
				 
						</form>
					</div>
			
				<?php
				}
				}
				?>	

			</div>

			<div class="margin tabcontent tk" id="tfish">
					<?php
					$query = "SELECT * FROM fish ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div>
						<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >
					
						<img src="prod_img/<?php echo $row["img"]; ?>" class="img" /><br />
				 
						<h3 class="text-info"><?php echo $row["type"]; ?></h3>
				 
						<h3 class="text-danger">&#8369; <?php echo $row["price"]; ?></h3>
				 
						<input type="number" name="quantity" value="1" class="quantity" min="1" max="30" >
				
						<input type="hidden" name="hidden_name" value="<?php echo $row["type"]; ?>" >
				 
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
				 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
				 
						</form>
					</div>
			
				<?php
				}
				}
				?>	

			</div>

			<div class="margin tabcontent tk" id="tsoup">
					<?php
					$query = "SELECT * FROM soup ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div>
						<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >
					
						<img src="prod_img/<?php echo $row["img"]; ?>" class="img" /><br />
				 
						<h3 class="text-info"><?php echo $row["type"]; ?></h3>
				 
						<h3 class="text-danger">&#8369; <?php echo $row["price"]; ?></h3>
				 
						<input type="number" name="quantity" value="1" class="quantity" min="1" max="30" >
				
						<input type="hidden" name="hidden_name" value="<?php echo $row["type"]; ?>" >
				 
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
				 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
				 
						</form>
					</div>
			
				<?php
				}
				}
				?>	

			</div>

			

			<div class="margin tabcontent tk" id="tbeverages">
					<?php
					$query = "SELECT * FROM bev ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div>
						<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >
					
						<img src="prod_img/<?php echo $row["img"]; ?>" class="img" /><br />
				 
						<h3 class="text-info"><?php echo $row["type"]; ?></h3>
				 
						<h3 class="text-danger">&#8369; <?php echo $row["price"]; ?></h3>
				 
						<input type="number" name="quantity" value="1" class="quantity" min="1" max="30" >
				
						<input type="hidden" name="hidden_name" value="<?php echo $row["type"]; ?>" >
				 
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
				 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
				 
						</form>
					</div>
			
				<?php
				}
				}
				?>	

			</div>

			<div class="margin tabcontent tk" id="tcombo">
					<?php
					$query = "SELECT * FROM combo ORDER BY id ASC";
					$result = mysqli_query($connect, $query);
					
					if(mysqli_num_rows($result) > 0)
					{
					while($row = mysqli_fetch_array($result))
					{
					?>
					<div>
						<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>"  >
					
						<img src="<?php echo $row["img"]; ?>" class="img" /><br />
				 
						<h3 class="text-info"><?php echo $row["type"]; ?></h3>
				 
						<h3 class="text-danger">&#8369; <?php echo $row["price"]; ?></h3>
				 
						<input type="number" name="quantity" value="1" class="quantity" min="1" max="30" >

						<input type="hidden" name="id" value="<?php echo $row['id']?>">
				
						<input type="hidden" name="hidden_name" value="<?php echo $row["type"]; ?>" >
				 
						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" >
				 
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
				 
						</form>
					</div>
			
				<?php
				}
				}
				?>

			</div>
			<div id="home" style="margin:50px 0 0 0 ;" class="parallax">
		
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

								<select class="select disabled" name="province">
									<option value="laguna">laguna</option>
								</select>

								<select class="select disabled" name="city">
									<option value="losbanos">losbanos</option>
								</select>
								<br>

								<select class="select disabled" name="brgy" >
									<option selected="" value="00" id="man">Barangay</option>
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
									<option id="pick" value="Pickup">Pickup</option>
									<option value="Delivery" selected="">Delivery</option>
									
								</select>
								
								<input type="time" class="txt" name="time" class="select" id="e" readonly >
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
				<li><a href="#home">home</a></li>
				<li><a href="index.php?#about">about</a></li>
				<li><a href="index.php?#menu">menu</a></li>
				<li><a href="index.php?#contact">contact</a></li>
				<li><a href="index.php?#take-out">take-out</a></li>
				<li><a href="history.php">history</a></li>
				<li style="float: right;"><a href="logout.php">log out</a></li>
				<li style="float: right;"><button class="btn" onclick="document.getElementById('cart').style.display='block'">add to cart</button></li>
				<li style="float: right;"><a href="settings.php"><?php echo $_SESSION['username']; ?> &#9881;</a></li>
			</ul>
	
	
		
			<script type="text/javascript" src="JS\menu.js"></script>
			<script type="text/javascript" src="JS\select.js"></script>
			<script type="text/javascript" src="JS\main.js"></script>

	</body>
</html>