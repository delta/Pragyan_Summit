<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CollegeRSVP;
use App\College;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


class ViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    // For RSVP
    public function rsvp(Request $request)
    {

        $id = $request->get('id');
        $hash = $request->get('hash');

        // For Debug & Test
        // return view('rsvp',compact('id'));

        $coll = College::where('id','=',$id)->first();

        if($coll == null)
        {
            abort(403, 'Invalid Link');
        }
        if(sha1($coll->name."Pragyan Summit Rocks".$coll->email) != $hash)
        {
            abort(403, 'Invalid Link');
        }

        return view('rsvp',compact('id'));
    }


    // function to submit RSVP

    public function submitrsvp(Request $request)
    {

        // For Debug & Test

        $validator = Validator::make($request->all(), [
            'id' => 'required|max:40',
            'f1' => 'required|max:40',
            'f2' => 'required|max:40',
            'phone' => 'required|integer|digits_between:10,10',
        ]);

        if ($validator->fails()) {
            abort(403, 'Invalid Link');
        }


        $id = $request->get('id');

        $coll = College::where('id','=',$id)->first();

        if($coll == null)
        {
            // echo "No such College";
            abort(403, 'Invalid Link');
        }

        $existingRsvp = null;
        $existingRsvp = CollegeRSVP::where('id','=',$id)->first();
        if($existingRsvp!=null)
        {
            // echo "No such College Link";
            abort(403, 'Invalid Link');
        }

        $f1 = $request->get('f1');
        $f2 = $request->get('f2');
        $phone = $request->get('phone');

        $newResponse = new CollegeRSVP;

        $newResponse->id = $id;
        $newResponse->field1 = $f1;
        $newResponse->field2 = $f2;
        $newResponse->phone = $phone;

        $newResponse->save();

        echo "Successfully Registered";
    }    

}
