<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('home');
        }
        function login(Request $request){
        $request -> validate([
        'fUser' => 'required',
        'fPass' => 'required'
        ],
        [
        'fUser.required' => 'user wajib di isi !',
        'fPass.required' => 'password wajib di isi !'
        ]);

        //pengecekkan data
        $ceklogin = [
            'user' => $request->fUser,
            'password' => $request->fPass
        ];
        if (Auth::attempt($ceklogin)){
            //echo "sukses login";
            //exit();
            $user = Auth::user();
            if ($user->admin_type=='admin'){
                return redirect('/admin');
            } elseif($user->admin_type == 'guest') {
                return redirect('/guest');
            }
        }else{
            return redirect('/')->withErrors('user dan password salah')->withInput();
        }
        }

        public function logout(Request $request) {
            Auth::logout();
            $request->session()->flush();
            return Redirect('/');
            }

}
