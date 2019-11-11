<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Target;

class TargetController extends Controller
{
    public function index()
		{
			$targets = Target::orderBy('ranking', 'desc')->orderBy('created_at', 'desc')->paginate(10);
			return view('index', compact('targets'));
		}

		public function create()
		{
			$targets = Target::orderBy('ranking', 'desc')->orderBy('created_at', 'desc')->paginate(10);
			return view('create', compact('targets'));
		}

		public function store()
		{
			// Step 1: Validate Data
			$this->validate(request(),
			[
				'target' => 'required|string|min:1',
				'ranking' => 'max:2',
			],
			[
				'target.required' => 'Target must say something',
				'working.max' => 'Ranking must be less than 100',
			]);

			// Step 2: Insert Data to DB
			Target::create
			([
					// 'db_field' => request('name_set_in_input_field_in_form')
					'target' => request('target'),
					'ranking' => request('ranking')
				]);

			// Step 3: Redirect Url
			return redirect('/'); // or return back(); for going to previous page
		}

		public function edit(Target $target)
		{
			$targets = Target::orderBy('ranking', 'desc')->orderBy('created_at', 'desc')->paginate(10);
			return view('edit', compact('targets', 'target'));
		}

		public function update(Target $target)
		{
			// Step 1: Validate Data
			$this->validate(request(),
			[
				'target' => 'required|string|min:1',
				'ranking' => 'max:2',
			],
			[
				'target.required' => 'Target must say something',
				'working.max' => 'Ranking must be less than 100',
			]);

			// Step 2: Insert Data to DB
			Target::where('id', $target->id)->update
			([
					// 'db_field' => request('name_set_in_input_field_in_form')
					'target' => request('target'),
					'ranking' => request('ranking')
				]);

			// Step 3: Redirect Url
			return redirect('/'); // or return back(); for going to previous page
		}

		public function delete(Target $target)
		{
			$target->delete();
			return back();
		}
}
