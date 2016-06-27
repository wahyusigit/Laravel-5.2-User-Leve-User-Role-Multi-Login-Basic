<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CustomAuth extends Controller
{
	public function __construct(){

	}

    public function getLogin(){
    	return view('customauth.formlogin');
    }
    public function postLogin(Request $data){
    	
    }

    public function getRegister(){
    	
    }
    public function gpostRegister(Request $data){
    	
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect(route('getLogin'));
    }
}
