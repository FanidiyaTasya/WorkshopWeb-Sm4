<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $tanggal_lahir = date_create_from_format('d M Y', '24 Aug 2004')->format('Y-m-d');
        Mahasiswa::create([ // dgn model
            'nim' => 'E41222742',
            'nama' => 'Fanidiya Tasya',
            'tgl_lahir'=> $tanggal_lahir,
            'alamat' => 'Jember',
            'th_angkatan' => '2022',
            'status' => 'Aktif'
        ]);
        // DB::table('mahasiswa')->insert([ // tanpa model
        //     'nim' => 'E41222742',
        //     'nama' => 'Fanidiya Tasya',
        //     'tgl_lahir'=> '2004-08-24',
        //     'alamat' => 'Jember',
        //     'th_angkatan' => '2022',
        //     'status' => 'Aktif'
        // ]);
    }
}
