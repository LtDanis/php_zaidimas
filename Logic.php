<?php
	class Logic
	{
		function generateRandom() {
			$_SESSION['isCorrect'] = false;
			$_SESSION['guesses'] = 0;
			return ($_SESSION['number'] = rand(1, 10));
		}
		
		function compareMessage($guess, $number) {
			$_SESSION['guesses'] += 1;
			if ($guess > $number) {
				return "Skaičius yra mažesnis.";
			} else if ($guess < $number) {
				return "Skaičius yra didesnis.";	
			} else {
				$_SESSION['isCorrect'] = true;
				return "Atspėjot";
			}
		}
	}
?>