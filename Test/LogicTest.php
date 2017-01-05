<?php

require 'Logic.php';

class LogicTest extends \PHPUnit_Framework_TestCase
{
	
	public function testRandomNumber()
	{
		$logic = new Logic;
		$number = $logic->generateRandom();
		$this->assertLessThanOrEqual(10, $number);
		$this->assertGreaterThanOrEqual(1, $number);
	}
	
	public function testCompareNumbers()
	{
		$logic = new Logic;
		$num1 = 3;
		$num2 = 10;
		$num3 = 5;
		$this->assertEquals("Skaičius yra didesnis.", $logic->compareMessage($num1, $num2));
		$this->assertEquals("Skaičius yra mažesnis.", $logic->compareMessage($num2, $num3));
		$this->assertEquals("Atspėjot", $logic->compareMessage($num2, $num2));
	}
}
?>