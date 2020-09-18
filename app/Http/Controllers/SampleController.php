<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Hash;
class SampleController extends Controller
{
    //
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
            'company' => $request->company,
            'business_arena' => $request->business_arena,
            'position' => $request->position,
            'zip' => $request->zip,
            'city' => $request->city,
            'country' => $request->country,
            'contact' => $request->contact,
        ]);
       	return redirect('/login');
       

        //$file->move($destination,$file);
        
    }
}
