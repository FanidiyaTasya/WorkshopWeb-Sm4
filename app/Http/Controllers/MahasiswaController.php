<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller {
    
    public function read() {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa', compact('mahasiswa'), [
            "title" => "Data Mahasiswa",
<<<<<<< HEAD
            "name" => "Fanidiya Tasya"
=======
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
        ]);
    }

    public function formCreate() {
        return view('create', [
            "title" => "Tambah Data Mahasiswa",
<<<<<<< HEAD
            "name" => "Fanidiya Tasya"
=======
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
        ]);
    }

    public function create(Request $request) {
        DB::table('mahasiswa')->insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'th_angkatan' => $request->th_angkatan,
            'status' => $request->status
        ]);
        return redirect()->route('mahasiswa.read')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function formEdit($id) {
        $mahasiswa =  Mahasiswa::select('*')->where('id', $id)->get();
        return view('edit', [
            "title" => "Edit Data Mahasiswa",
            'mahasiswa' => $mahasiswa
        ]);
    }
    
    public function update(Request $request) {
        $mhs = Mahasiswa::where('id', $request->id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'th_angkatan' => $request->th_angkatan,
            'status' => $request->status
        ]);
        return redirect()->route('mahasiswa.read')->with('success', 'Data mahasiswa berhasil diperbarui');
    }

    public function delete($id) {
        $mahasiswa = Mahasiswa::where('id', $id)->delete();
        return redirect()->route('mahasiswa.read')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
