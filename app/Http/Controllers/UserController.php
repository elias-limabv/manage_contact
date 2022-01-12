<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function login()
	{
		return view('welcome');
	}

	public function auth(Request $request)
	{
		if(Auth::attempt(['email' => $request, 'password' => $request->password])){
			dd('Logou');
		}else{
			dd('Nao Logou');
		}
	}
}