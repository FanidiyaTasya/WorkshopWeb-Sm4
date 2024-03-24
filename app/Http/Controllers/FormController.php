<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller {
    
    public function index() {
        return view('form', [
            "title" => "Form",
            "name" => "Fanidiya Tasya"
        ]);
    }

    // public function proses(Request $request) {
    //     $nama = $request->nama;
    //     $nim = $request->nim;
    //     $prodi = $request->prodi;
        
    //     return "Nama : " . $nama . "\n" . 
    //     "NIM : " . $nim . "\n" . 
    //     "Program Studi : " . $prodi;
    // }

    public function proses(Request $request) {
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'status' => $request->status
        ]);
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ttl' => $request->ttl,
            'status' => $request->status
        ];
        return view('profile', ['data' => $data]);
    }
}
