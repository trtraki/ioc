<?php

use App\Services\Test;

class CalculationTest extends TestCase {

	public function testAdditionNormal() {
		$test = new Test();
		$this -> assertEquals($test->addition(2,4), 6);
	}

	public function testSubtractionNormal() {
		$test = new Test();
		$this -> assertEquals($test->subtraction(2,4), -2);
	}

	public function testMultiplicationNormal() {
		$test = new Test();
		$this -> assertEquals($test->multiplication(2,4), 8);
	}



}
