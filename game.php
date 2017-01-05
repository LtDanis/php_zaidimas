<?php
	function generateRandom() {
		return rand(1, 10);
	}


?>
<!DOCTYPE html>
<html>
<body>

<h1>Atspėk skaičių</h1>

<form role="form" method="post" action="game.php">
	<fieldset>
		<label><span>Jūsų spėjimas: &nbsp;</span></label>
		<input name="number" type="number"  min="1" max="10" required autofocus></input>
		
		<button type="button" name="submit">Spėti</button>
	</fieldset>
</form>

</body>
</html>
