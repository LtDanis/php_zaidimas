<?php
	session_start();
	
	include('Logic.php');
	
	$logic = new Logic;
	
	if(!isset($_SESSION['number']) ) $logic->generateRandom();
	
	if(isset($_POST['new_game'])){
		$logic->generateRandom();
	}
	
?>

<!DOCTYPE html>
<html>
<body>

	<h1>Atspėk skaičių</h1>
	<p> Skaičius yra intervale nuo 1 iki 10</p>

	<form role="form" method="post" action="testDrivenGame.php">
		<fieldset>
			<label><span>Jūsų spėjimas: &nbsp;</span></label>
			<input name="guess" type="number"  min="1" max="10" required autofocus></input>
			
			<p><?php if(isset($_POST['guess'])) echo $logic->compareMessage($_POST['guess'], $_SESSION['number']); ?></p>
			
			<input type="submit" value="Spėti" name="submit" <?php if($_SESSION['isCorrect'] == true) echo "disabled";?>></input>
		</fieldset>
	</form>
	
	<?php if($_SESSION['isCorrect'] == true)
		echo '
		<br>
		<form role="form" method="post" action="testDrivenGame.php">
			<input type="submit" value="Iš naujo" name="new_game"></input>
		<form>
		<br>
		<p>Atspėta iš '.$_SESSION['guesses'].' karto';
	?>
</body>
</html>
