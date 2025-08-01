<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing users data
        DB::table('users')->truncate();
        // Seed the users table with sample data
        DB::table('users')->insert([
            [
                'name' => 'Alice',
                'email' => 'alice@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'jenis_kelamin' => 'Perempuan',
                'foto' => 'alice.jpg',
                'alamat' => 'Jl. Contoh No. 1, Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob',
                'email' => 'bob@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'jenis_kelamin' => 'Laki-laki',
                'foto' => 'bob.jpg',
                'alamat' => 'Jl. Dummy No. 2, Bandung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Charlie',
                'email' => 'charlie@example.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
                'jenis_kelamin' => 'Laki-laki',
                'foto' => 'charlie.jpg',
                'alamat' => 'Jl. Fiktif No. 3, Surabaya',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
