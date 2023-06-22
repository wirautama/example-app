<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class DataMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Aditya Wira Utama',
            'nim' => 181080200248,
            'jenis_kelamin' => true,
            'tanggal_lahir' => '2000-01-13',
            'alamat' => 'Jl. Citandui No.11',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Faizah Nur Kumala',
            'nim' => 181080200249,
            'jenis_kelamin' => false,
            'tanggal_lahir' => '2000-01-15',
            'alamat' => 'Jl. Citandui No.19',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Putra Angga Reksa',
            'nim' => 181080200250,
            'jenis_kelamin' => true,
            'tanggal_lahir' => '2000-01-16',
            'alamat' => 'Jl. Citandui No.20',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Farisah Al-Mirroh',
            'nim' => 181080200251,
            'jenis_kelamin' => false,
            'tanggal_lahir' => '2000-01-17',
            'alamat' => 'Jl. Citandui No.21',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Jawahira Agnesfi',
            'nim' => 181080200252,
            'jenis_kelamin' => false,
            'tanggal_lahir' => '2000-01-17',
            'alamat' => 'Jl. Citandui No.22',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Herlian Aliyasa Almajdudin',
            'nim' => 181080200253,
            'jenis_kelamin' => true,
            'tanggal_lahir' => '2000-01-18',
            'alamat' => 'Jl. Citandui No.23',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Stevani Amalia Haque',
            'nim' => 181080200254,
            'jenis_kelamin' => false,
            'tanggal_lahir' => '2000-01-19',
            'alamat' => 'Jl. Citandui No.24',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('data_mahasiswa')->insert([
            'nama' => 'Muhammad Imam Tohari',
            'nim' => 181080200255,
            'jenis_kelamin' => true,
            'tanggal_lahir' => '2000-01-20',
            'alamat' => 'Jl. Citandui No.25',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
