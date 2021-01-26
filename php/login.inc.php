<?php

include_once ('users.class.php');
if (isset($_POST['submit'])) {
	$mail1 = $_POST["mail"];
	$parola1 = $_POST["parola"];

	$user = new User();
	$user->setMail($mail1);
	$user->setParola($parola1);
	try {

		$user->login();

	} catch (\Exception $e) {
		echo "Eroare : " . $e->getMessage();
	}

}


 ?>
