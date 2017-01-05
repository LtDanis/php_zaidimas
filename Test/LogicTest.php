<?php
class LogicTest extends \PHPUnit_Framework_TestCase
{
	public function testRandomNumber()
	{
		$number = $this->generateRandom();
		$this->assertLessThanOrEqual(10, $number);
		$this->assertGreaterThanOrEqual(1, $number);
	}
	
	public function testCompareNumbers()
	{
		$num1 = 3;
		$num2 = 10;
		$num3 = 5;
	}
}