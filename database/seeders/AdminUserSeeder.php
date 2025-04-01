<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Admin Kampus', 
            'email' => 'admin@unibamadura.ac.id',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'nim' => null,
            'no_telepon' => '085231755195', 
            'jurusan' => null,
        ]);
    }
}
