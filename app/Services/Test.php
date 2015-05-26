<?php namespace App\Services;

use Log;

class Test implements Testinterface  {

	public function addition($x, $y) {

		Log::info($x . ' + '. $y . 'の和を計算をします。');
		$z = $x + $y;
		Log::info('答えは'. $z);

		return $z;

	}

	public function subtraction($x, $y) {

		Log::info($x . ' - '. $y . 'の差を計算をします。');
		$z = $x - $y;
		Log::info('答えは'. $z);

		return $z;
	}

	public function multiplication($x, $y) {

		Log::info($x . ' × '. $y . 'の積を計算をします。');
		$z = $x * $y;
		Log::info('答えは'. $z);

		return $z;
	}
}
