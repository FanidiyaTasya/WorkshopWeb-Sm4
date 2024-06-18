<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller {

    public function index() {
        return view('register');
    }

    public function actionRegister(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect('login');
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
