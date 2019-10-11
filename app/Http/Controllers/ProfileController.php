<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
class ProfileController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile(){
        return view('profile', array('user'=>Auth::user()));
    }
    public function  update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().'.'. $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('../public/img/'.$filename));
            $user = Auth::user();
            $user->avatar=$filename;
            $user->save();
        }
        return view('profile', array('user'=>Auth::user()));
    }
}
