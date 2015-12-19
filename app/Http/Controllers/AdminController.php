<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registrant;
use App\College;
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

	public function show_colleges(Request $request)
	{
		$collegelist = College::paginate(10);
		$collegelist->setPath('colleges');
		return view('collegelist',compact('collegelist'));	
	}
	public function send_college_email(Request $request)
	{
		$id = $request->get('id');

		$coll = College::where('id','=',$id)->first();

		$hash = sha1($coll->name."Pragyan Summit Rocks".$coll->email);
		$reglink = action('ViewController@index')."/rsvp?id=".$id."&hash=".$hash;

		Mail::send('collegemail', ['name' => $coll->name,'reglink'=>$reglink], function ($m) use ($coll) {
			$m->from('noreply@pragyan.org', 'Team Pragyan');
			$m->to($coll->email, $coll->name)->subject('Pragyan Youth Business Summit');
		});

		echo "Email Sent Successfully to ".$coll->email;
	}
}
