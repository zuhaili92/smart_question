<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Department;
use App\User;
use App\Lecturer;

class RegistrationController extends Controller
{
	public function create()
	{
		$departments = Department::all();

		return view('auth.register', compact('departments'));
	}

	public function store()
	{
		$this->validate(request(),[
			'name' => 'required',
			'ic_no' => 'required|min:12|numeric',
			'position' => 'required',
			'tel_no' => 'required|numeric',
			'staff_id' => 'required',
			'department' => 'required',
			'username' => 'required|email',
			'password' => 'required|confirmed|min:6'
			]);
		if (User::where('username', '=', request('username'))->exists()) {

			return back()->withErrors([

 				'message' => 'Email already exist in database'

 				]);
			
		}

		$user = User::create([
				'username' => request('username'),
				'password' => bcrypt(request('password'))
				]);

			$user_id = $user->id;

			$lecturer = Lecturer::create([
				'user_id' => $user_id,
				'name' => request('name'),
				'ic_no' => request('ic_no'),
				'position' => request('position'),
				'tel_no' => request('tel_no'),
				'staff_id' => request('staff_id'),
				'department' => request('department')
				]);

		auth()->login($user);

		return redirect()->home();
	}
}
