<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registrant as Reg;
use Mail;
use Validator;
use Log;

class RegController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        // var_dump($request->all());
        // Log::info($request->all());
        $v = Validator::make($request->all(), [
        'name'          => 'required|min:3|max:20',
        'email'         => 'required|email',
        'sop'           => 'required|max:2000',
        'type'           => 'required|in:Student,Corporate',
        'phone'         => 'required|integer|digits_between:10,10',
        'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if($v->fails())
        {
            // return redirect()->action('ViewController@index')->with('message','Dai.');
            echo $v->errors();
            Log::info("VAlidator failed");
            Log::info($v->errors());
            die();
        }
        $reg = new Reg;
        $reg->name = $request->get('name');
        $reg->phone = $request->get('phone');
        $reg->email = $request->get('email');
        $reg->sop = $request->get('sop');
        $reg->type = $request->get('type');
        // Log::info("Now sending mail");

        Mail::send('mail', ['name' => $request->get('name')], function ($m) use ($request) {

            $m->from('noreply@pragyan.org', 'Team Pragyan');
            $m->to($request->get('email'), $request->get('name'))->subject('Pragyan Youth Business Summit');
        });
        // Log::info("Sent mail");

        // Log::info("Save user");
        $reg->save();

        echo("true");
    }
}
