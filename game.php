<?php
	session_start();
	
	$message = "";
	$won = false;
	
	function generateRandom() {
		$_SESSION['number'] = rand(1, 10);
	}
	
	if(!isset($_SESSION['number']) ) generateRandom();
	
	if(isset($_POST['new_game'])){
		generateRandom();
	}
	
	if(isset($_POST['submit'])){
		$number = $_SESSION['number'];
		$guess=$_POST['guess'];
		if ($guess > $number) {
			$message = "Skaičius yra mažesnis.";
		} else if ($guess < $number) {
			$message = "Skaičius yra didesnis.";
		} else {
			$won = true;
			$message = "Atspėjot";
		}
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
	<?php if ($won) 
		echo '
		<form role="form" method="post" action="game.php">
			<input type="submit" value="Iš naujo" name="new_game"></input>
		<form>
		';
	?>
</body>
</html>
