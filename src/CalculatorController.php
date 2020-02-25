<?php

namespace Devojo\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
	public function index () {
		return view('calculator::add');
	}    
}
