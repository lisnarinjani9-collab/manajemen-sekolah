<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // akun guru (kalau emailnya sudah ada, tidak dibuat lagi)
        User::firstOrCreate(
            ['email' => 'rinjani@gmail.com'],
            [
                'name' => 'rinjaniw',
                'password' => Hash::make('bismillah'),
                'role' => 'guru'
            ]
        );

        // akun siswa
        User::firstOrCreate(
            ['email' => 'rincantik@gmail.com'],
            [
                'name' => 'rin imut',
                'password' => Hash::make('bismillah'),
                'role' => 'siswa'
            ]
        );
    }
}
