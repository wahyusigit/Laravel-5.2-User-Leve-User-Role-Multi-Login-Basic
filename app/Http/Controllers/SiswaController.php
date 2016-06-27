<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiswaController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    	$this->middleware('role:siswa');
    }

    public function getIndex(){
    	return view('siswa');
    }
}
