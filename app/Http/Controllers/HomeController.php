<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use App\Lecturer;
use App\Department;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $lecturer = Lecturer::info()->first();

        $departments = Department::all();

        return view('lecturer.profile', compact('lecturer','departments'));
    }

    public function update()
    {
        $this->validate(request(),[
            'name' => 'required|min:2',
            'ic_no' => 'required|min:12|numeric',
            'position' => 'required|min:2',
            'tel_no' => 'required|min:8|numeric',
            'staff_id' => 'required|min:2',
            'department' => 'required'
            ]);

        $profile = Lecturer::info()->first();
        $profile->name = request('name');
        $profile->ic_no = request('ic_no');
        $profile->position = request('position');
        $profile->tel_no = request('tel_no');
        $profile->staff_id = request('staff_id');
        $profile->department = request('department');
        $profile->save();

        return redirect()->back()->with('message','Profile has been successfully updated');
    }

    public function show()
    {
        return view('lecturer.show');
    }

    public function change()
    {
        $this->validate(request(),[
            'currentpassword' => 'required|min:6',
            'password' => 'required|confirmed|min:6'
            ]);
        $current_password = Auth::User()->password; 
        if(Hash::check(request('currentpassword'), $current_password))
      {                     
        $user = User::find(Auth::User()->id);
        $user->password = Hash::make(request('password'));
        $user->save();

        return redirect()->back()->with('message','Password had been updated');
      }
      else
      {
        return redirect()->back()->withErrors('Please enter correct current password');
      }
    }
}
