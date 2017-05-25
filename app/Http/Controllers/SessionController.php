<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function create()
    {
    	return view('auth.login');
    }
    
    public function store()
    {
    	//Attempt to authenticate the user.
    	
     if(! auth()->attempt(request(['username','password'])))
     {
        return back()->withErrors([

           'message' => 'Please check your credentials and try again.'

           ]);
    }

    return redirect()->home();

    	//Redirect to the home page
}

public function destroy()
{
   auth()->logout();

   return redirect('/');
}
}
