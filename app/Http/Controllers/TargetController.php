<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Target;

class TargetController extends Controller
{
    public function index()
		{
			$targets = Target::orderBy('ranking', 'desc')->orderBy('create_at', 'desc')->paginate(10);
			return view('index');
		}

		public function create()
		{
			return view('create');
		}

		public function edit()
		{
			return view('edit');
		}
}
