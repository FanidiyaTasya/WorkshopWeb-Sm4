<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([ 
            'name' => 'Fanidiya Tasya',
            'username' => 'tasy',
            'email' => 'tasya@gmail.com',
            'password' => bcrypt('1234')
        ]);
        Mahasiswa::factory()->count(5)->create();
    }
}
