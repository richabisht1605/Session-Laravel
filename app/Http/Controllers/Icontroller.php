<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use  App\Models\Ajax;

class Icontroller extends Controller
{
    public function session()
    {
        return response()
        ->view('session-form')
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Thu, 01 Jan 1970 00:00:00 GMT');
    }


    public function sfm(Request $request)
    {
        $username=$request->get('username');
        $password=$request->get('password');
        if ($username == "admin" && $password == "admin"){
            Session::put("user_session","done");
            return redirect ("home");
        }
    }


    public function home ()
    {
        return response()
        ->view('home')
        ->header('Cache-Control', 'no-store, no-cache, must-revalidate, post-check=0, pre-check=0')
        ->header('Pragma', 'no-cache')
        ->header('Expires', 'Thu, 01 Jan 1970 00:00:00 GMT');
    }

    
    public function logout ()
    {
        Session::flush();
        return redirect('session-form')->withHeaders([
            'Cache-Control' => 'no-store, no-cache, must-revalidate, max-age=0',
            'Pragma' => 'no-cache',
            'Expires' => 'Sat, 01 Jan 2000 00:00:00 GMT',
        ]);
    }
    
}
