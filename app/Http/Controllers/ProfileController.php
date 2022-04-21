<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
class ProfileController extends Controller
{

   
    public function index()
    {
        if(Auth::check())
        {
    	       $user_data = DB::table('users')
                        ->where('id','=',Auth::user()->id)
                        ->first();
	           return view('profile.index',compact('user_data'));   
        }
        else
        {
            return redirect()->to('/login');
        }
    }

    public function update_user_profile(Request $request)
    {
        if(Auth::check())
        {

        	$id = $request->user_id;
            $old_password = $request->old_password;
            $name = $request->name;
            $email = $request->email;
            $new_password = $request->new_password;

            if($new_password == "")
            {
            	$password = $old_password;
            }
         	
            else
            {
            	$password = Hash::make($new_password);
            }

            $values = array('name'=>$name, 'email'=>$email, 'password'=>$password);
            $update_values = DB::table('users')->where('id',$id)
                            ->update($values);
                        if($update_values)
                        {
                            $user_data = DB::table('users')
                   						->where('id','=',Auth::user()->id)
                            			->first();
                            $msg="yes";
    	    				return view('profile.index',compact('user_data' , 'msg')); 
                        }
                        
        }
        else
        {
            return redirect()->to('/login');
        }
    }

}

   

