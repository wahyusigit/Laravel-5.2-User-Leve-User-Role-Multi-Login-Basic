<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KepalaSekolahController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    	$this->middleware('role:kepalasekolah');
    }

    public function getIndex(){
    	return view('kepalasekolah');
    }
}
