<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginControlller extends Controller {

    public function index() {
        return view('login');
    }

    public function actionLogin(Request $request) {
        $data = [
            'username' => $request->input('username'),
            'password' =>$request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect('home');
        } else {
            Session::flash('error', 'Username atau Password salah');
            return redirect('login')->withInput();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');  
    }
}
