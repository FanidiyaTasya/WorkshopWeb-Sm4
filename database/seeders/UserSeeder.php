<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::create([ // dgn model
            'name' => 'Fanidiya Tasya',
            'username' => 'tasy',
            'email' => 'tasya@gmail.com',
            'password' => bcrypt('1234')
        ]);
    }
}
