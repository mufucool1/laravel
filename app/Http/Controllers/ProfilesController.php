<?php

namespace App\Http\Controllers;

//use DB;
use App\Models\User;
use App\Models\Profile;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user){
        //dd($user);
        //dd(User::find($user)); // dd is die and dump
        //$user=User::findorFail($user);
        //return view('home',['user'=>$user]);

        // Check for profile created or not
        // $profile_exists = DB::table('profiles')
        //     ->where('user_id', '=', $user)
        //     //->where('password', '=', $password)
        //     ->count();

        if(Profile::where('user_id', $user)->exists()) {
            $profile_exists=1;
        } else {
            $profile_exists=0;
        }

        $user=User::findorFail($user);

        return view('profile',['user'=>$user,'profile_exists'=>$profile_exists]);
    }
}
