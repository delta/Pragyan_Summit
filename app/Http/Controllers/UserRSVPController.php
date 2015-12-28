<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Log;
use App\UserRSVP;

class UserRSVPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rsvpuser');
    }

	public function store(Request $request)
	{
		$v = Validator::make($request->all(), [
            'f1'			=> 'required|min:3|max:20',
            'email'			=> 'required|email',
            'phone'			=> 'required|integer|digits_between:10,10',
            'organization'		=> 'required|min:3|max:30',
            'g-recaptcha-response'	=> 'required|recaptcha',
        ]);

        if($v->fails())
        {
            // return redirect()->action('ViewController@index')->with('message','Dai.');
            $msg = "Unsuccessful.";
            Log::info("Validator failed for User RSVP");
            Log::info($v->errors());

            $allerrors = $v->errors();

            if( $allerrors->has('g-recaptcha-response'))
            {
                $msg = $msg."Please fill the captcha";
            }
            return view('msgpage',compact('msg'));
        }

        $reg = new UserRSVP;
        $reg->name = $request->get('f1');
        $reg->phone = $request->get('phone');
        $reg->email = $request->get('email');
	$reg->organization = $request->get('organization');

        $reg->save();
        
        $msg = "Successfully saved response";
        return view('msgpage',compact('msg'));
    }
}
