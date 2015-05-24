<?php namespace App\Http\Controllers;

use Log;
use App\Services\Test as TestA;

class WelcomeController extends Controller {

	protected $test;
	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(TestA $test)
	{
		$this->middleware('guest');
		$this -> test = $test;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$x = 2;
		$y = 3;

		/*
		Log::info($x . ' + '. $y . '$B$NOB$r7W;;$r$7$^$9!#(B');
		$z = $x + $y;
		Log::info('$BEz$($O(B'. $z);

		Log::info($x . ' - '. $y . '$B$N:9$r7W;;$r$7$^$9!#(B');
		$z = $x - $y;
		Log::info('$BEz$($O(B'. $z);

		Log::info($x . ' $B!_(B '. $y . '$B$N@Q$r7W;;$r$7$^$9!#(B');
		$z = $x * $y;
		Log::info('$BEz$($O(B'. $z);
		 */

		$this -> test ->addition($x, $y);
		$this -> test ->subtraction($x, $y);
		$this -> test ->multiplication($x, $y);

		return view('welcome');
	}

}
