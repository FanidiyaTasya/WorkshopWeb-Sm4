<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller {
    
    public function index() {
        // $nama = "Tasyyaaa";
        $matkul = ['Web Framework', 'Mobile Framework'];
        // var_dump($matkul);
        // die;

        return view('dash', [
            "nama" => "Tasyyaaa", 
            "matkul" => $matkul
        ]);
    }

    public function getNama($nama) {
        return $nama;
    }
}
