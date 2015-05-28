<?php namespace App\Http\Controllers;

use Log;
use App\Services\Test as TestA;
use App\Facades\TestFacade;

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
		Log::info($x . ' + '. $y . 'の和を計算をします。');
		$z = $x + $y;
		Log::info('答えは'. $z);

		Log::info($x . ' - '. $y . 'の差を計算をします。');
		$z = $x - $y;
		Log::info('答えは'. $z);

		Log::info($x . ' × '. $y . 'の積を計算をします。');
		$z = $x * $y;
		Log::info('答えは'. $z);
 */
		$this -> test ->addition($x, $y);
		$this -> test ->subtraction($x, $y);
		$this -> test ->multiplication($x, $y);



		TestFacade::addition($x, $y);
		TestFacade::subtraction($x, $y);
		TestFacade::multiplication($x, $y);
		
		
		return view('welcome');
	}

}
