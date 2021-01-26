<!DOCTYPE html>
<?php
include '../php/login.inc.php';
 ?>
<html lang="en" dir="ltr">
<div class="form-login">
	<form action="php/login.inc.php" method="post">

		<div class="form-group">
			<label for="mail"> Mail : </label>
			<input class="form-element-input" type="email" placeholder="Mail" name="mail">
			<br>
		</div>
		<div class="form-group">
			<label for="parola"> Parola : </label>
			<input class="form-element-input" type="password" placeholder="Parola" name="parola">
		</div>
		<div class="form-group">
			<button class="form-button" type="submit" name="submit">Autentificare </button>
		</div>
	</form>
</div>
</html>
