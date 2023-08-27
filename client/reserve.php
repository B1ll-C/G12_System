<?php
	include('info.php');

	if (isset($_POST['cancel'])) {
		if(!empty($_POST['reserve'])){

			foreach($_POST['reserve'] as $checked){
			$query 	= "DELETE FROM $username$R WHERE id='$checked'";	
			mysqli_query($acc, $query);
				}
			}
				header('Location: history.php');

		}

	if (isset($_POST['remove'])) {
			if (!empty($_POST['prod'])) {
				foreach ($_POST['prod'] as $removed) {
					$query1 = "DELETE FROM $username$D_P WHERE id ='$removed'";
					mysqli_query($acc, $query1);
				}
			}
			header('Location: history.php');
		}	



?>