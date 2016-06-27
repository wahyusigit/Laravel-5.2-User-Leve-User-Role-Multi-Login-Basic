<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GuruController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    	$this->middleware('role:guru');
    }

    public function getIndex(){
    	return view('guru');
    }
}
