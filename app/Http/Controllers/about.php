<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class about extends Controller
{
    public function about(){
    	$user = user::find(1)->passport;
    	return $user;
    	// return view('about');
    }
}
