<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registrant;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
	public function view()
	{
		$registrants = Registrant::paginate(50);
		$registrants->setPath('admin');
		return view('registrants',compact('registrants'));
	}
	public function login()
	{
		if(Session::has('user_name'))
			return Redirect::to(action('AdminController@view'));
		else
			return view('login');
	}
	public function check_login(Request $request)
	{
		$password=$request->get('password');
		$password = sha1($password);
				
		if($password === env('SUMMIT_PASSWORD'))
		{
			Session::put('user_name','admin');
			return Redirect::to(action('AdminController@view'));
		}
		else
		{
			return Redirect::to(action('AdminController@login'))->with('message', 'Incorrect Username or Password');
		}
	}
}
