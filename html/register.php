<!DOCTYPE html>

<html lang="en">


<head>
	<meta charset="UTF-8">
	<title></title>
	<?php

	include '../php/register.inc.php';
	?>
</head>
<body>
	<div class="form-login">
		<form action="php/register.inc.php" method="post">
			<div class="form-group">
				<label class="form-element" for="name"> Nume complet : </label>
				<input class="form-element-input" type="name" placeholder="Nume" name="nume">
				<br>
			</div>
			<div class="form-group">
				<label class="form-element" for="mail"> Mail : </label>
				<input class="form-element-input" type="email" placeholder="Mail" name="mail">
				<br>
			</div>
			<div class="form-group">
				<label class="form-element" for="parola"> Parola : </label>
				<input class="form-element-input" type="password" placeholder="Parola" name="parola">
			</div>
			<div class="form-group">
				<label class="form-element" for="telefon"> Telefon : </label>
				<input class="form-element-input" type="tel" placeholder="Telefon" name="telefon">
			</div>
			<div class="form-group">
				<button class="form-button" type="submit" name="submit">Inregistrare </button>
			</div>
		</form>
	</div>

</body>
</html>
