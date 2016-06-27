<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
use App\User;
use App\Role;

use Auth;
class CustomAuthController extends Controller
{
    
    public function getLogin(){
    	return view('customauth.formlogin');
    }
    public function postLogin(Request $data){
    	if(Auth::attempt(['username' => $data->useremail,'password' => $data->password]))
    		 {
    		 	if(Auth::user()->role->nama_role === 'siswa'){
                    return redirect('/siswa');
                }
                elseif(Auth::user()->role->nama_role === 'pegawai'){
                    return redirect('/pegawai');
                }
                elseif(Auth::user()->role->nama_role === 'kepalasekolah'){
                    return redirect('/kepsek');
                }
                elseif(Auth::user()->role->nama_role === 'admin'){
                    return redirect('/admin');
                }
                else{
                    return redirect('/logout');
                }
    		}
    	elseif(Auth::attempt(['email' => $data->useremail,'password' => $data->password]))
    		 {
    		 	if(Auth::user()->role->nama_role === 'siswa'){
                    return redirect('/siswa');
                }
                elseif(Auth::user()->role->nama_role === 'pegawai'){
                    return redirect('/pegawai');
                }
                elseif(Auth::user()->role->nama_role === 'kepalasekolah'){
                    return redirect('/kepsek');
                }
                elseif(Auth::user()->role->nama_role === 'admin'){
                    return redirect('/admin');
                }
                else{
                    return redirect('/logout');
                }
    		}
    	else{
    		return redirect(route('getLogin'));
    	}

    }	

    public function getRegister(){
    	return view('customauth.formregister');
    }
    public function postRegister(Request $data){

    	$get_id_role = DB::table('roles')->where('nama_role','=','siswa')->first()->id;
    	$user = new User();
    	$user->name = $data->name;
    	$user->username = $data->username;
		$user->email = $data->email;
		$user->id_role = $get_id_role;
		$user->password = bcrypt($data->password);
		$user->save();

		return redirect(route('getLogin'));
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect(route('getLogin'));
    }
}
