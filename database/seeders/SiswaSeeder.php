<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nisn' => '1234567890',
            'nama' => 'John Doe',
            'kelas' => '10',
            'jurusan' => 'IPA',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Contoh Alamat No. 123',
        ]);
    }
}
