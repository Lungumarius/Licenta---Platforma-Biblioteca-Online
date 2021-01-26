<!DOCTYPE html>
<?php
include '../php/imprumut.inc.php';
 ?>
<html lang="en" dir="ltr">
<div class="form-login">
	<form action="php/imprumut.inc.php" method="post">

		<div class="form-group">
			<label for="mail"> Mail : </label>
			<input class="form-element-input" type="email" placeholder="Mail" name="mail">
			<br>
		</div>
		<div class="form-group">
			<label for="ISBN"> ISBN : </label>
			<input class="form-element-input" type="text" placeholder="ISBN" name="ISBN">
			<br>
		</div>
		<div class="form-group">
			<label for="returnare"> Data returnare : </label>
			<input class="form-element-input" type="select" placeholder="Returnare" name="returnare">
			<br>
		</div>
		<div class="form-group">
			<button class="form-button" type="submit" name="submit">Realizeaza imprumut</button>
		</div>


	</form>
</div>
</html>
