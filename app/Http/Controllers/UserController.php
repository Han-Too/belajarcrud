<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function login(Request $request){
        $login = DB::table('user')->where([['username',$request->username],['password',$request->password]])->get();
        if($login->count() > 0){
            session()->put('login',$login->count());
            Alert::success('Success', 'Berhasil Login');
            return view('admin.dashboard');
        }else {
            Alert::error('Gagal Login', 'Username atau Password Salah');
            return redirect('/');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
