<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    
    public function index() {
        return view('profile',
        [
            "nama" => "Fanidiya Tasya Fitriananda",
            "prodi" => "Teknik Informatika"
        ]);
    }
}
