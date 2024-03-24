<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngkaController extends Controller {
    
    public function satu() {
        $matkul = ['Web Framework', 'Mobile Framework'];
        // var_dump($matkul);
        // die;

        return view('satu', [
            "nama" => "Tasyyaaa", 
            "matkul" => $matkul
        ]);
    }
    
    public function dua() {
        return view('dua', [
            "nama" => "Tasyyaaa",
            "prodi" => "Teknik Informatika"
        ]);
    }

    public function tiga() {
        return view('tiga');
    }

    public function getNama($nama) {
        return $nama;
    }
}
