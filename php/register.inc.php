<?php
include_once ('users.class.php');
if (isset($_POST['submit'])) {
$nume1 = $_POST['nume'];
$mail1 = $_POST["mail"];
$parola1 = $_POST["parola"];
$telefon1 = $_POST["telefon"];
if(empty($nume1) || empty($mail1) || empty($parola1) || empty($telefon1)){
	echo 'Toate campurile sunt obligatorii ! ';
	die();
}
$user = new User();
$user->setNume($nume1);
$user->setMail($mail1);
$user->setParola($parola1);
$user->setTelefon($telefon1);
try {
	$user->register();

} catch (\Exception $e) {
	echo "Eroare : " . $e->getMessage();
}

}


 ?>
