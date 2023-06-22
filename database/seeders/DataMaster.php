<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataMaster extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_master')->insert([
            'kode_jurusan' => 'JRS001',
            'jurusan' => 'Informatika'
        ]);
        DB::table('data_master')->insert([
            'kode_jurusan' => 'JRS002',
            'jurusan' => 'Ilmu Komunikasi'
        ]);
        DB::table('data_master')->insert([
            'kode_jurusan' => 'JRS003',
            'jurusan' => 'Psikologi'
        ]);
    }
}
