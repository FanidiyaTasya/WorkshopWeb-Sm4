<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        DB::table('mahasiswa')->insert([
            'nama' => 'Fanidiya Tasya',
            'alamat' => 'Jember',
            'ttl'=> 'Jember, 24 Agustus 2004',
            'status' => 'Aktif'
        ]);
    }
}
