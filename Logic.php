<?php
	public class Logic
	{
		function generateRandom() {
			$_SESSION['guesses'] = 1;
			return ($_SESSION['number'] = rand(1, 10));
		}
		
		function compareMessage($guess, $number) {
			if ($guess > $number) {
				return "Skaičius yra mažesnis.";
			} else if ($guess < $number) {
				return "Skaičius yra didesnis.";	
			} else {
				return "Atspėjot";
			}
		}
	}
?>