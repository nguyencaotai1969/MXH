<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

   public function mesage(){
       return view('mesage');
   }
}
