<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function test()	// coming from routes
		{
			// echo "Hello Laravel";
			return view('test');
		}
}
