<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Registrant as Reg;

use Validator;

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
        $v = Validator::make($request->all(), [
        'name'          => 'required|min:3|max:20',
        'email'         => 'required|email|unique:registrants',
        'sop'           => 'required|max:2000',
        'phone'         => 'required|integer|digits_between:10,10',
        'g-recaptcha-response' => 'required|recaptcha',
        ]);

        if($v->fails())
        {
            // return redirect()->action('ViewController@index')->with('message','Dai.');
            echo $v->errors();
            die();
        }

        $reg = new Reg;
        $reg->name = $request->get('name');
        $reg->phone = $request->get('phone');
        $reg->email = $request->get('email');
        $reg->sop = $request->get('sop');
        $reg->save();

        echo("true");
    }
}
