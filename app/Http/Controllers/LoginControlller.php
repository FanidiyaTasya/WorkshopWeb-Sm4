<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginControlller extends Controller {

    public function index() {
        return view('login');
        // if (Auth::check()) {
        //     return redirect('home');
        // } else {
        //     return view('login');
        // }
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
    
    // public function cobalogin(Request $request) {
    //     $this->validate($request, [
    //         'username' => 'required|string', // validasi usernema, bisa mengisi email/username
    //         'password' => 'required|string',
    //     ]);
    //     // cek inputan jika formatny email, lakukan proses authentication dgn email, selain itu dgn username 
    //     $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    //     // tampung info login, kolom type pertama bersifat dinamis, berdasarkan value pengecekan diatas
    //     $login = [
    //         $loginType => $request->username,
    //         'password' => $request->password
    //     ];

    //     if (auth()->attempt($login)) {
    //         return redirect()->route('home');
    //     }
    //     return redirect()->route('login')->with(['error' => 'Email/Password Salah!']);
    //     // routenya hrs ada name diakhir route('login') -> Route::get('/login', [LoginControlller::class, 'index'])->name('login');
    // }
}
