<?php
	$message = "";
	$number = 0;
	
	function generateRandom() {
		$number = rand(1, 10);
	}
	
	
	if(isset($_POST['submit'])){
		$guess=$_POST['guess'];
		echo $guess;
	}

?>

<!DOCTYPE html>
<html>
<body>

<h1>Atspėk skaičių</h1>
<p> Skaičius yra intervale nuo 1 iki 10</p>

<form role="form" method="post" action="game.php">
	<fieldset>
		<label><span>Jūsų spėjimas: &nbsp;</span></label>
		<input name="guess" type="number"  min="1" max="10" required autofocus></input>
		
		<input type="submit" value="Spėti" name="submit"></input>
	</fieldset>
</form>

<p><?php echo $message ?></p>

</body>
</html>
