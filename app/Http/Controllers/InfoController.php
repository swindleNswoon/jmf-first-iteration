<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required'
        ]);

        //Enter user info into database
        $info = new Info;

        $info->firstname = $request->input('firstname');
        $info->lastname = $request->input('lastname');
        $info->email = $request->input('email');
        $info->address = $request->input('address');
        $info->state = $request->input('state');
        $info->country = $request->input('country');
        $info->zip = $request->input('zip');
        $info->phone = $request->input('phone');

        //Save user info in database
        $info->save();

        return redirect('/');
    }
}
