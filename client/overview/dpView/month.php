
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="CSS/p.css">
	</head>
	<body>	
		<ul id="" class="sides">
			<b>reserved:</b>
			<li>
				<button class="accordion">January(<?php echo $janr1;  ?>)</button>
				<div class="panel">
					<?php 

						if(mysqli_num_rows($janr) > 0)
						{
						while($janrow = mysqli_fetch_array($janr))
						{
						
					?>
						<p><?php echo $janrow['fname'];?> <?php echo $janrow['lname']; ?></p>
				<?php }}?>
				</div>
				</li>
			<li>
				<button class="accordion">February(<?php echo $febr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($febr) > 0)
						{
						while($febrow = mysqli_fetch_array($febr))
						{
						
					?>
						<p><?php echo $febrow['fname']; ?> <?php echo $febrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>

			<li>
				<button class="accordion">march(<?php echo $marr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($marr) > 0)
						{
						while($marrow = mysqli_fetch_array($marr))
						{
						
					?>
						<p><?php echo $marrow['fname'];  ?> <?php echo $marrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>

			<li>
				<button class="accordion">April(<?php echo $aprr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($aprr) > 0)
						{
						while($aprrow = mysqli_fetch_array($aprr))
						{
						
					?>
						<p><?php echo $aprrow['fname'];  ?> <?php echo $aprrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>

			<li>
				<button class="accordion">may(<?php echo $mayr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($mayr) > 0)
						{
						while($mayrow = mysqli_fetch_array($mayr))
						{
						
					?>
						<p><?php echo $mayrow['fname'];  ?> <?php echo $mayrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>

			<li>
				<button class="accordion">june(<?php echo $junr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($junr) > 0)
						{
						while($junrow = mysqli_fetch_array($junr))
						{
						
					?>
						<p><?php echo $junrow['fname'];  ?> <?php echo $junrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	

			<li>
				<button class="accordion">july(<?php echo $julr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($julr) > 0)
						{
						while($julrow = mysqli_fetch_array($julr))
						{
						
					?>
						<p><?php echo $julrow['fname'];  ?> <?php echo $julrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	

			<li>
				<button class="accordion">august(<?php echo $augr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($augr) > 0)
						{
						while($augrow = mysqli_fetch_array($augr))
						{
						
					?>
						<p><?php echo $augrow['fname'];  ?> <?php echo $augrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	

			<li>
				<button class="accordion">september(<?php echo $sepr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($sepr) > 0)
						{
						while($seprow = mysqli_fetch_array($sepr))
						{
						
					?>
						<p><?php echo $seprow['fname'];  ?> <?php echo $seprow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	

			<li>
				<button class="accordion">october(<?php echo $octr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($octr) > 0)
						{
						while($octrow = mysqli_fetch_array($octr))
						{
						
					?>
						<p><?php echo $octrow['fname'];  ?> <?php echo $octrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	

			<li>
				<button class="accordion">novemver(<?php echo $novr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($novr) > 0)
						{
						while($novrow = mysqli_fetch_array($novr))
						{
						
					?>
						<p><?php echo $novrow['fname'];  ?> <?php echo $novrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	

			<li>
				<button class="accordion">december(<?php echo $decr1;  ?>)</button>
				<div class="panel">
	 				<?php 

						if(mysqli_num_rows($decr) > 0)
						{
						while($decrow = mysqli_fetch_array($decr))
						{
						
					?>
						<p><?php echo $decrow['fname'];  ?> <?php echo $decrow['lname']; ?></p>
				<?php }}?>
				</div>
			</li>	
		</ul>

	<script type="text/javascript" src="JS/js.js"></script>
	</body>
</html>