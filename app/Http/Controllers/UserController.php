<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	//echo 1234567;
    	return view('user.add');
    }
}
