<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller {
    
    public function index() {
        return view('form', [
            "title" => "Form",
            "name" => "Fanidiya Tasya"
        ]);
    }

    public function proses(Request $request) {
        $nama = $request->nama;
        $nim = $request->nim;
        $prodi = $request->prodi;
        
        return "Nama : " . $nama . "\n" . 
        "NIM : " . $nim . "\n" . 
        "Program Studi : " . $prodi;
    }
}
