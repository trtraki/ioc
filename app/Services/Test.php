<?php namespace App\Services;

use Log;

class Test implements Testinterface  {

	public function addition($x, $y) {

		Log::info($x . ' + '. $y . '$B$NOB$r7W;;$r$7$^$9!#(B');
		$z = $x + $y;
		Log::info('$BEz$($O(B'. $z);

		return $z;

	}

	public function subtraction($x, $y) {

		Log::info($x . ' - '. $y . '$B$N:9$r7W;;$r$7$^$9!#(B');
		$z = $x - $y;
		Log::info('$BEz$($O(B'. $z);

		return $z;
	}

	public function multiplication($x, $y) {

		Log::info($x . ' $B!_(B '. $y . '$B$N@Q$r7W;;$r$7$^$9!#(B');
		$z = $x * $y;
		Log::info('$BEz$($O(B'. $z);

		return $z;
	}
}
