<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Hash;
class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //Login Landing Page
       $title = "Register as - EyeVent";
        return view('reg.regAs')->with('title',$title);
    }
    public function newOrg()
    {
        $title = "Register Organizer - EyeVent";
        return view('reg.newOrg')->with('title',$title);
    }
    public function newClient()
    {
        $title = "Register Client - EyeVent";
        return view('reg.newClient')->with('title',$title);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Use to validate all the post request
        $destination = "assets/uploads/";
        $file = $request->file('fileToUpload');
        if($request->hasFile('fileToUpload'))
            $file = $request->file('fileToUpload')->getClientOriginalName();
        
     
        $path = $destination.$file;
       
        $request->validate([
            'usercontrol' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'first_name' => 'required',
            'last_name' => 'required',
            'bday' => 'required',
            'email' => 'required|unique:users',
            'address' => 'required',
            'business_arena' => 'nullable',
            'company' => 'nullable',
            'position' => 'nullable',
            'zip' => 'nullable',
            'city' => 'nullable',
            'country' => 'nullable',
            'contact' => 'nullable'
        ]);

        $ba = $request->business_arena;
        $po = $request->position;
        $zip = $request->zip;
        $city = $request->city;
        $cou = $request->country;
        $con = $request->contact;
        $comp = $request->company;

        if(!isset($ba))
        {
            $ba = "";
        }
        else{
            $ba = $request->business_arena;
        }
        if(!isset($po))
        {
            $po = "";
        }
        else{
            $po = $request->position;
        }
        if(!isset($zip))
        {
            $zip = "";
        }
        else{
            $zip = $request->zip;
        }
        if(!isset($city))
        {
            $city = "";
        }
        else{
            $city = $request->city;
        }
        if(!isset($cou))
        {
            $cou = "";
        }
        else{
            $cou = $request->country;
        }
        if(!isset($con))
        {
            $con = "";
        }
        else{
            $con = $request->contact;
        }
        if(!isset($comp))
        {
            $comp = "";
        }
        else{
            $comp = $request->company;
        }

        Users::create([
            'usercontrol' => $request->usercontrol,
            'pic_location' => $path,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'bday' => $request->bday,
            'address' => $request->address,
            'email' => $request->email,
            'company' => $comp,
            'business_arena' => $ba,
            'position' => $po,
            'zip' => $zip,
            'city' => $city,
            'country' => $cou,
            'con' => $con,
        ]);


        //$file->move($destination,$file);
        return redirect('/login');

    }
    public function storages(Request $request)
    { 
        //Use to validate all the post request
        $destination = "assets/uploads/";
        $file = $request->file('fileToUpload');
        if($request->hasFile('fileToUpload'))
            $file = $request->file('fileToUpload')->getClientOriginalName();
        
     
        $path = $destination.$file;
       
        $request->validate([
            'usercontrol' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:8',
            'first_name' => 'required',
            'last_name' => 'required',
            'bday' => 'required',
            'email' => 'required|unique:users',
            'address' => 'required',
            'business_arena' => 'nullable',
            'company' => 'nullable',
            'position' => 'nullable',
            'zip' => 'nullable',
            'city' => 'nullable',
            'country' => 'nullable',
            'contact' => 'nullable'
        ]);

      
        Users::create([
            'usercontrol' => $request->usercontrol,
            'pic_location' => $path,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'fname' => $request->first_name,
            'lname' => $request->last_name,
            'bday' => $request->bday,
            'address' => $request->address,
            'email' => $request->email,
            'company' => $request->$company,
            'business_arena' => $request->$business_arena,
            'position' => $request->position,
            'zip' => $request->$zip,
            'city' => $request->$city,
            'country' => $request->$country,
            'con' => $request->$contact,
        ]);


        //$file->move($destination,$file);
        return redirect('/login');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
