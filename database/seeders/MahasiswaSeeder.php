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
        Mahasiswa::factory()->count(5)->create();

        // Mahasiswa::create([ // dgn model
        //     'nim' => 'E41222742',
        //     'nama' => 'Fanidiya Tasya',
        //     'tgl_lahir'=> '2004-08-24',
        //     'alamat' => 'Jember',
        //     'th_angkatan' => '2022',
        //     'status' => 'Aktif'
        // ]);
        // Mahasiswa::create([ // dgn model
        //     'nim' => 'E4123456',
        //     'nama' => 'Ahmad Edra',
        //     'tgl_lahir'=> '2003-08-28',
        //     'alamat' => 'Jember',
        //     'th_angkatan' => '2022',
        //     'status' => 'Aktif'
        // ]);
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
