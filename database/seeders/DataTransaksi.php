<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DataTransaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS001',
            'nim' => 181080200248,
            'nama' => 'Aditya Wira Utama',
            'kode_jurusan' => 'JRS001',
            'jurusan' => 'Informatika',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS002',
            'nim' => 181080200249,
            'nama' => 'Faizah Nur Kumala',
            'kode_jurusan' => 'JRS002',
            'jurusan' => 'Ilmu Komunikasi',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS003',
            'nim' => 181080200248,
            'nama' => 'Aditya Wira Utama',
            'kode_jurusan' => 'JRS003',
            'jurusan' => 'Psikologi',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS004',
            'nim' => 181080200252,
            'nama' => 'Jawahira Agnesfi',
            'kode_jurusan' => 'JRS003',
            'jurusan' => 'Psikologi',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS005',
            'nim' => 181080200253,
            'nama' => 'Herlian Aliyasa Almjduddin',
            'kode_jurusan' => 'JRS002',
            'jurusan' => 'Ilmu Komunikasi',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS006',
            'nim' => 181080200251,
            'nama' => 'Farisah Al-Mirroh',
            'kode_jurusan' => 'JRS003',
            'jurusan' => 'Psikologi',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS007',
            'nim' => 181080200254,
            'nama' => 'Stevani Amalia Haque',
            'kode_jurusan' => 'JRS001',
            'jurusan' => 'Informatika',
            'created_at' => now(),
            'updated_at' => now()

        ]);
        DB::table('data_transaksi')->insert([
            'kode_transaksi' => 'TRS008',
            'nim' => 181080200255,
            'nama' => 'Muhammad Imam Tohari',
            'kode_jurusan' => 'JRS001',
            'jurusan' => 'Informatika',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}
