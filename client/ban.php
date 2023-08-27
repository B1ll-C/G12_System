<?php
	if (isset($_GET['ban'])) {
?>
	<div id="ban">
				<button class="x" onclick="exit()">&times;</button>
				<br>
				<h1 id="msg">sorry your account has been banned contact us for more information</h1>
			</div>
			<script type="text/javascript">
				function exit(argument) {
	document.getElementById('ban').style.display='none';
}
			</script>
<?php
	}
?>