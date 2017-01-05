<?php
class LogicTest extends \PHPUnit_Framework_TestCase
{
	public function testRandomNumber()
	{
		$number = $generateRandom();
		$this->assertLessThanOrEqual(10, $number);
		$this->assertGreaterThanOrEqual(1, $number);
	}
	
	public function testCompareNumbers()
	{
		$num1 = 3;
		$num2 = 10;
		$num3 = 5;
		$this->assert("Skaičius yra didesnis.", compareMessage($num1, $num2));
		$this->assert("Skaičius yra mažesnis.", compareMessage($num2, $num3));
		$this->assert("Atspėjot", compareMessage($num2, $num2));
	}
}