<?php namespace App\Services;


class Test implements Testinterface  {
	public function addition($x, $y) {
		return $x + $y;
	}

	public function subtraction($x, $y) {
		return $x - $y;
	}

	public function multiplication($x, $y) {
		return $x * $y;
	}
}
